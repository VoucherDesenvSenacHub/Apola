<?php


include "nav_bar_adm.php";

 

$errTitulo = "";
$errStatus = "";
$errCategoria = "";
$errDescricao = "";
$errImagem = "";
$errPreco = "";
$errCor = "";
$errTamanho = "";
$errEstoque = "";

if(isset($_POST['carregarDadosProduto'])){
    $titulo = $_POST['tituloProduto'];
    if(empty($titulo)){
        $errTitulo = "Adicione um titulo";
    }
    $status = $_POST['selectStatus'];
    if(empty($status)){
        $errStatus = "Escolha o status";
    }
    $categoria = $_POST['selectCategoria'];
    if(empty($categoria)){
        $errCategoria = "Escolha uma categoria";
    }
    $descricao = $_POST['descricaoProduto'];
    if(empty($descricao)){
        $errDescricao = "Adicione uma descrição";
    }
    $cor = $_POST['corProduto'];
    if(empty($cor)){
        $errCor = "Adicione uma cor";
    }
    $tamanho = $_POST['tamanhoProduto'];
    if(empty($tamanho)){
        $errTamanho = "Adicione um tamanho";
    }
    $estoque = $_POST['estoqueProduto'];
    if(empty($estoque)){
        $errEstoque = "Adicione um estoque";
    }
    $preco = $_POST['precoProduto'];
    if(empty($preco)){
        $errPreco = "Adicione um preço";
    }

    if(empty($titulo) || empty($status) || empty($categoria) || empty($descricao) || empty($cor) || empty($tamanho) || empty($estoque)){
       
    }
    else{

        if (isset($_FILES['imagemProduto']) && $_FILES['imagemProduto']['error'] === UPLOAD_ERR_OK) {
            $extensoesPermitidas = ['png', 'jpg', 'jpeg', 'jfif'];
            $pastaDestino = '../../src/imagens/produtos/';

            $imagem = $_FILES['imagemProduto'];
            $nomeOriginal = $imagem['name'];
            $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

            if (!in_array($extensao, $extensoesPermitidas)) {
                echo '<script>alert("A extensão do arquivo não é permitida.")</script>';
            } else {
                $novoNome = uniqid('ImagemCategoria_', true) . '.' . $extensao;
                $caminhoFinal = $pastaDestino . $novoNome;

                if (!move_uploaded_file($imagem['tmp_name'], $caminhoFinal)) {
                    $errImg = "Falha ao mover a imagem para o destino.";
                }
            }

            $produto = new Produto();
            $produto->nome = $titulo;
            $produto->preco = $preco;
            $produto->avaliacao = "";
            $produto->quantidade = $estoque;
            $produto->cor = $cor;
            $produto->tamanho = $tamanho;
            $produto->imagem = $caminhoFinal;
            $produto->descricao = $descricao;
            $produto->tipo = "Da loja";
            $produto->status_produto = $status;
            $produto->categoria_id_categoria = $categoria;
    
            $resultado = $produto->cadastrarProduto();
            if($resultado){
                echo '<script>alert("Cadastrado com Sucesso!")</script>';
            }
        }   
        else {
            $errImg = "Insira uma imagem.";
        }



    }


}

?>
<body>   
    <main class="main_adm">
        <form method="POST" enctype="multipart/form-data" class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <a href="./listar_produtos_adm.php" style="text-decoration: none; color: #ccc"><i class="fa-solid fa-chevron-left"></i></a>
                    <span class="title_adm">Novo Produto</span>
                </div>
            </div>
            <div class="conatiner_cadastro_adm_items">
                <div class="conatiner_cadastro_adm_items_header">
                    <div class="conatiner_cadastro_adm_items_header_left">
                        <div class="item_flex_adm">
                            <label for="">Titulo</label>
                            <input type="text" name="tituloProduto">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errTitulo; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Status</label>
                            <select name="selectStatus" id="">
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errStatus; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Categoria</label>
                            <select name="selectCategoria" id="dadosTodasCategoria">
                                <!-- <option value="">Amigurumi</option>
                                <option value="">Cachepô</option> -->
                            </select>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errCategoria; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Descrição</label>
                            <textarea name="descricaoProduto" id=""></textarea>
                            <p class="text_tamanho_img" style="color:red;"> <?= $errDescricao; ?> </p>
                        </div>
                        
                    </div>
                    <div class="conatiner_cadastro_adm_items_header_right">
                        <div class="conatiner_img_add_adm add_img_categoria">
                                <input type="file" name="imagemProduto" id="imgInput" class="imagemCategoria" >
                                <img class= "imagemCategoria-active" id="preview_img" src="" alt="">
                                <p> + Adicionar Imagem</p>  
                        </div>
                        <p class="text_tamanho_img" style="color:red;"> <?= $errImagem; ?> </p>
                    </div>
                </div>
                <div class="conatiner_cadastro_adm_items_body">
                    <div class="conatiner_cadastro_adm_items_body_add">
                        <div class="item_flex_adm">
                            <label for="">Preço</label>
                            <input type="text" name="precoProduto" class="input_adcionar_produto">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errPreco; ?> </p>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Adicionar Cor</label>
                            <input type="color" name="corProduto" class="input_adcionar_produto" >
                            <p class="text_tamanho_img" style="color:red;"> <?= $errCor; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->
                        <div class="item_flex_adm">
                            <label for="">Adicionar Tamanho</label>
                            <input name="tamanhoProduto" class="input_adcionar_produto" type="text">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errTamanho; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->
                        <div class="item_flex_adm">
                            <label for="">Adicionar Estoque</label>
                            <input name="estoqueProduto" class="input_adcionar_produto" type="text">
                            <p class="text_tamanho_img" style="color:red;"> <?= $errEstoque; ?> </p>
                        </div>
                        <!-- <button class="btn_produto_add">Adicionar</button> -->

                    </div>
                </div>
            </div>
            <div id="conatiner_btn_adm_pc"  class="conatiner_btn_adm">
                <!-- <button class="btn_excluir_adm">Excluir</button> -->
                <button type="submit" name="carregarDadosProduto" class="btn_salvar_adm">Salvar</button>
            </div>     
    </form>   
    </main>
    <!-- <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script> -->
</body>
</html>