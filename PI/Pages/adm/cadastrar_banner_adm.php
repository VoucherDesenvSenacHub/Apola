<?php

include "head_adm.php";
// include "nav_bar_adm.php";
require '../../App/config.inc.php';
require '../../App/Session/Login.php';

if (isset($_POST['cadastrarPrincipal'])) {
    $pastaDestino = '../../src/imagens/banner/bannerCadastrado/bannersPrincipais/';
    $extensoesPermitidas = ['png', 'jpg', 'jpeg'];
    $nomesInputs = ['bannerPrincipal1', 'bannerPrincipal2', 'bannerPrincipal3'];

    foreach ($nomesInputs as $index => $inputName) {
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
            $arquivo = $_FILES[$inputName];
            $nomeOriginal = $arquivo['name'];
            $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

            if (!in_array($extensao, $extensoesPermitidas)) {
                echo "<script>alert('O arquivo \"$nomeOriginal\" não é PNG nem JPG.')</script>";
                exit;
            }

            $novoNome = uniqid('banner_', true) . '.' . $extensao;
            $caminhoFinal = $pastaDestino . $novoNome;

            if (!move_uploaded_file($arquivo['tmp_name'], $caminhoFinal)) {
                die("Falha ao mover o arquivo: $nomeOriginal");
            }

            // ✅ Definir o banner e a posição correspondente
            $posicao = $index + 1;

            $banner = new Banner();
            $banner->caminho = $caminhoFinal;
            $banner->posicao = $posicao;

            $bannerExistente = $banner->getBannerForPosicao('banners_principais', $posicao);

            if ($bannerExistente) {
                // Atualiza se já existe na posição
                $banner->updateBannersPrincipais();
            } else {
                // Cadastra se ainda não tem banner naquela posição
                $banner->cadastrarBannersPrincipais();
            }

        } else {
            echo "<script>alert('Erro ao processar o arquivo \"$inputName\".')</script>";
        }
    }

    echo "<script>alert('Todos os banners principais foram processados!')</script>";
}

if (isset($_POST['cadastrarSecundario'])) {
    $pastaDestino = '../../src/imagens/banner/bannerCadastrado/bannersSecundarios/';
    $extensoesPermitidas = ['png', 'jpg', 'jpeg'];
    $nomesInputs = ['bannerSecundario'];

    foreach ($nomesInputs as $index => $inputName) {
        if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
            $arquivo = $_FILES[$inputName];
            $nomeOriginal = $arquivo['name'];
            $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

            if (!in_array($extensao, $extensoesPermitidas)) {
                echo "<script>alert('O arquivo \"$nomeOriginal\" não é PNG nem JPG.')</script>";
                exit;
            }

            $novoNome = uniqid('banner_', true) . '.' . $extensao;
            $caminhoFinal = $pastaDestino . $novoNome;

            if (!move_uploaded_file($arquivo['tmp_name'], $caminhoFinal)) {
                die("Falha ao mover o arquivo: $nomeOriginal");
            }

            // ✅ Definir o banner e a posição correspondente
            $posicao = 1;

            $banner = new Banner();
            $banner->caminho = $caminhoFinal;
            $banner->posicao = $posicao;

            $bannerExistente = $banner->getBannerForPosicao('banners_secundarios', $posicao);

            if ($bannerExistente) {
                // Atualiza se já existe na posição
                $banner->updateBannersSecundarios();
            } else {
                // Cadastra se ainda não tem banner naquela posição
                $banner->cadastrarBannersSecundarios();
            }

        } else {
            echo "<script>alert('Erro ao processar o arquivo \"$inputName\".')</script>";
        }
    }

    echo "<script>alert('Todos os banners principais foram processados!')</script>";
}


$banner = new Banner();

$bannersPrincipais = [];
for ($i = 1; $i <= 3; $i++) {
    $bannersPrincipais[$i] = $banner->getBannerForPosicao("banners_principais", $i);
}

$bannersSecundarios = [];
for ($i = 1; $i <= 3; $i++) {
    $bannersSecundarios[$i] = $banner->getBannerForPosicao("banners_secundarios", $i);
}

$bannersPromocionais = [];
for ($i = 1; $i <= 3; $i++) {
    $bannersPromocionais[$i] = $banner->getBannerForPosicao("banners_promocionais", $i);
}

$bannersMobile = [];
for ($i = 1; $i <= 3; $i++) {
    $bannersMobile[$i] = $banner->getBannerForPosicao("banners_mobile", $i);
}              

?>

    <header class="header_adm" >
            <nav class="navbar_adm" id="sidebar_adm">
                <div id="sidebar_adm_content">
                    <div class="logo_sidebar">
                        <img  id="logo_adm" src="../../src/imagens/image.png" alt="">
                    </div>
                    <ul id="side_bar_itens">
                        <li class="side_bar-itens">
                            <a  style="text-decoration:none; "href="dashbord_adm.php">
                                <i class="fa-solid fa-chart-simple"></i>
                                <span class="text_side_item">Dashbord</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a style="text-decoration:none; " href="listar_pedidos_adm.php">
                                <i class="fa-solid fa-truck"></i>
                                <span class="text_side_item">Pedidos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a style="text-decoration:none; " href="listar_produtos_adm.php">
                                <i class="fa-solid fa-box"></i>
                                <span class="text_side_item">Produtos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a href="listar_categoria_adm.php">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span class="text_side_item">Categorias</span>
                            </a>
                        </li>
                        <li class="side_bar-itens  active">
                            <a href="cadastrar_banner_adm.php">
                                <i class="fa-solid fa-bookmark"></i>
                                <span class="text_side_item">Banners</span>
                            </a>
                        </li>
                    </ul>
            
                    <button id="open_btn_adm">
                        <i id="open_btn_icon_adm" class="fa-solid fa-chevron-right"></i>
                    </button>
        
                </div>
        
                <div id="logout_adm">
                    <button class="side_bar-itens btn_logout_adm">
                        <a href="../user">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span class="text_side_item">Sair</span>
                        </a>
                    </button>
                </div>
                
        
            </nav>
            <nav class="nav_mobile_adm">
                <div class="nav_bar_content_mobile_adm">
                    <ul>
                        <li>
                            <a href="dashbord_adm.php"><i class="fa-solid fa-chart-simple"></i></a>
                        </li>
                        <li>
                            <a href="listar_pedidos_adm.php"><i class="fa-solid fa-truck"></i></a>
                        </li>
                        <li>
                            <a href="listar_produtos_adm.php"><i class="fa-solid fa-box"></i></a>
                        </li>
                        <li>
                            <a href="listar_categoria_adm.php"><i class="fa-solid fa-boxes-stacked"></i></a>
                        </li>
                        <li>
                            <a class="active_mob"  href="cadastrar_banner_adm.php"><i class="fa-solid fa-bookmark"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-right-to-bracket"></i></a>
                        </li>
                    </ul>    
                </div>
            </nav>

    </header>
    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <span class="title_adm">Cadastrar Banners</span>
                </div>
                <div class="container_title_adm_right">
                </div>
                
            </div>
           <div class="conatiner_cadastro_adm_items">
                <div class="top_container_cadastrar_produto_adm">
                    <!-- Banners Principais -->
                    <form method="POST" class="item_top_produto" enctype="multipart/form-data">
                        <h4 class="title_banner_categoria" >Banners Principais</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1400x400px)</div>
                        <div class="container_banner_wrap" id="banner-principal">
                            <div class="banner-item">
                                <img src= " <?php echo isset($bannersPrincipais[1]) ? $bannersPrincipais[1]->caminho : '../src/imagens/banner/1.png'; ?>" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"> <i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input name="bannerPrincipal1" type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="<?php echo isset($bannersPrincipais[2]) ? $bannersPrincipais[2]->caminho : '../src/imagens/banner/1.png'; ?>" alt="Imagem 2" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input name="bannerPrincipal2" type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="<?php echo isset($bannersPrincipais[3]) ? $bannersPrincipais[3]->caminho : '../src/imagens/banner/1.png'; ?>" alt="Imagem 3" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input name="bannerPrincipal3" type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="conatiner_btn_adm ">
                            <button type="submit" name="cadastrarPrincipal" class="btn_salvar_adm">Salvar</button>
                        </div>
                    </form> 

                    <!-- Banners Secundários-->

                    <form method="POST" enctype="multipart/form-data" class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Secundários</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1700x700px)</div>
                        <div class="container_banner_wrap" id="banner-secundario">
                            <div class="banner-item">
                                <img src="<?php echo isset($bannersSecundarios[1]) ? $bannersPrincipais[1]->caminho : '../src/imagens/banner/1.png'; ?>" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input name="bannerSecundario" type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="conatiner_btn_adm ">
                            <button type="submit" name="cadastrarSecundario" class="btn_salvar_adm">Salvar</button>
                        </div>
                    </form>
            
                    <!-- Banners Promocionais -->
                    <form method="POST" enctype="multipart/form-data" class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Promocionais</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1700x700px)</div>
                        <div class="container_banner_wrap-promocional" id="banner-secundario">
                            <div class="banner-item-promocional">
                                <img src="../src/imagens/card_promocional/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input name="bannerPromocional1" type="file" class="file-upload" accept="image/*" style="display: none;">
                            </div>
                            <div class="quadro-banners-promo">
                                <div class="banner-item-promo">
                                    <img src="../src/imagens/card_promocional/2.png" alt="Imagem 2" class="preview-image banner-image">
                                    <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                    <input name="bannerPromocional2" type="file" class="file-upload" accept="image/*" style="display: none;">
                                </div>
                                <div class="banner-item-promo">
                                    <img src="../src/imagens/card_promocional/3.png" alt="Image 3" class="preview-image banner-image">
                                    <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                    <input name="bannerPromocional3" type="file" class="file-upload" accept="image/*" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button type="submit" name="cadastrarPromocionais" class="btn_salvar_adm">Salvar</button>
                        </div>
                    </form>

                    <!-- Banners Mobile -->
                    <form name="formMobile" method="POST" enctype="multipart/form" class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Mobile</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1080x1080px)</div>
                        <div class="container_banner_wrap" id="banner-mobile">
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;" name="mobileImage1">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </form>
            
                    <!-- Banners Categoria
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Categoria</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (750x980px)</div>
                        <div class="container_banner_wrap" id="banner-categoria">
                            <div class="banner-item">
                                <img src="../src/imagens/img_categorias_2/7.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="container_btn_salvar_excluir_produto_mobile">
                            <button class="btn_salvar_produto">Salvar</button>
                        </div>
                    </div> -->
            
                    <!-- Banners Sobre Mim -->
                    <form method="POST" enctype="multipart/form" class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Sobre Mim</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1000x500px)</div>
                        <div class="container_banner_wrap" id="banner-sobre-mim">
                            <div class="banner-item">
                                <img src="../src/imagens/SobreMim/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </fomr>            
                </div>
            </div>
            
        
        </div>
    

    </main>

    <script src="cadastrar_banner.js"></script>
    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>