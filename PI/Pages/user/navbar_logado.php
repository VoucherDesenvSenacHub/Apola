<?php
// Start session if not already started
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Require the Login class to use its methods
require_once __DIR__ . '/../../App/Session/Login.php';

require_once __DIR__ . '/../../App/Entity/Cliente.class.php';
require_once __DIR__ . '/../../App/Entity/Categoria.class.php';

use App\Entity\Categoria;

$result = Login::IsLogedCliente();
$cli = null;
$categorias = [];

if ($result) {
    $id_cliente = $_SESSION['cliente']['id_cliente'] ?? null;

    if ($id_cliente) {
        $objCliente = new Cliente();
        $cli = $objCliente->getClienteById($id_cliente);
    }

    $categorias = Categoria::buscarTodas();
}
?>

 <!-- INICIO MeENU NAVABAR -->
        <header class="menu">
            <nav class="container-menu">
                    <div class="img-menu">
                        <a href="./Home.php">
                            <img src="../../src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
                        </a>
                    </div>
                    <div class="barra-pesquisa">
                        <div class="container-barra">
                        <input class="input-pesquisa" id="input-busca" type="text" placeholder="Pesquise seu produto...">
                        <div id="resultado-busca" class="resultados-busca"></div>
                            <a href="#" class="btn-pesquisa">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
            <!-- INICIO MENU MOBILE -->
                    <div class="btn-abrir-menu" id="btn-menu-abrir">
                        <i class="fa-solid fa-bars"></i>
                    </div>
    
                    <div class="mobile-btn" id="mobile-btn">
                        <div class="btn-fechar" id="btn-fechar">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <a  href="./perfil.php" class="content-mobile-top">
                            <div class="img-content-mobile">
                                
                                <?php if ($cli['foto_perfil']): ?>
                                    <img src="<?=$cli['foto_perfil'];?>" alt="Foto de Perfil">
                                    <?php else: ?>
                                    <img src="../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg" alt="Foto de Perfil">
                                <?php endif; ?>

                            
                            
                            </div>

                        </a>
                        <div class="content-mobile-btn-login-cad">
                            <button class="btn-login-mobile">
                                <a href="./carrinho.php"><i class="fa-solid fa-bag-shopping"></i> Sacola</a>
                            </button>
                            <button class="btn-cadastro-mobile">
                                <a href="#">Ajuda</a>
                            </button>
                        </div>
                        <div class="barra-pesquisa-mobile">
                            <div class="content-mobile-pesquisa">
                                <input type="text"><button class="btn-pesquisa-mobile"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
    
                        <div class="content-conteudo-mobile">
                            <h5>Destaque</h5>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <a href="alterar_perfil.php"></i> Alterar Perfil</a>
                                </li>
<!-- 
                                <li>
                                    <i class="fa-solid fa-fire"></i>
                                    <a href="">Mais Vendidos</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    <a href="">Ofertas</a>
                                </li> -->
                                <li>
                                    <i class="fa-solid fa-box"></i>
                                    <a href=" ./produto_personalizado.php">Produto Personalizado</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-people-group"></i>
                                    <a href="./SobreNos.php">Sobre Nós</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-heart"></i>
                                    <a href="./Favoritos.php">Favoritos</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                    <a href="./historico_pedido.php">Histórico de pedidos</a>
                                </li>
                            </ul>
                            <h5>Categorias</h5>
                            <ul>
                                <li class="categoria-content-mobile-items">
                                    <a href="#">Amigurumi</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <div class="submenu-drop-mobile">
                                    <ul class="dropdown__menu">
                                        <div class="btn-voltar-submenu">
                                            <i class="fa-solid fa-chevron-left"></i><p class="text-submenu-voltar">voltar</p>
                                        </div>
                                        <li><a class="drop__link" href="#">Amigurumi Cacto</a></li>
                                        <li><a class="drop__link" href="#">Amigurumi Urso</a></li>
                                    </ul>
                                </div>
                            
                                <li class="categoria-content-mobile-items">
                                    <a href="#">Cachepô</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <div class="submenu-drop-mobile">
                                    <ul class="dropdown__menu">
                                        <div class="btn-voltar-submenu">
                                            <i class="fa-solid fa-chevron-left"></i><p class="text-submenu-voltar">voltar</p>
                                        </div>
                                        <li><a class="drop__link" href="#">Cachepô Bolsa</a></li>
                                        <li><a class="drop__link" href="#">Cachepô Tapete</a></li>
                                    </ul>
                                </div>
                            
                                <li class="categoria-content-mobile-items">
                                    <a href="#">Porta-Chaves</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <div class="submenu-drop-mobile">
                                    <ul class="dropdown__menu">
                                        <div class="btn-voltar-submenu">
                                            <i class="fa-solid fa-chevron-left"></i><p class="text-submenu-voltar">voltar</p>
                                        </div>
                                        <li><a class="drop__link" href="#">Porta-Chaves de raposa</a></li>
                                        <li><a class="drop__link" href="#">Porta-Chaves de raposa</a></li>
                                    </ul>
                                </div>
                                <li class="categoria-content-mobile-items">
                                    <a href="#">Bordado</a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </li>
                                <div class="submenu-drop-mobile">
                                    <ul class="dropdown__menu">
                                        <div class="btn-voltar-submenu">
                                            <i class="fa-solid fa-chevron-left"></i><p class="text-submenu-voltar">voltar</p>
                                        </div>
                                        <li><a class="drop__link" href="#">Bordado paisagem</a></li>
                                        <li><a class="drop__link" href="#">Bordado paisagem</a></li>
                                    </ul>
                                </div>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="overlay-mobile" id="overlay-mobile"></div>
            <!-- FIM MENU MOBILE -->
                    <div class="lista-item">
                        <nav class="itens-menu">
                            <ul class="menu-main">
                                <li class="icon-default-back">
                                    <a id="icon-default" href="./SobreNos.php">Sobre Nós</a>
                                </li>
                                <li class="icon-default-back">
                                    <a id="icon-default" href="./produto_personalizado.php">Personalize</a>
                                </li>
                                <li id="text-categoria">
                                    <a href="#">Categorias <i class="fa-solid fa-chevron-down icon-seta"></i></a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-content">
                                            <?php if (!empty($categorias)): ?>
                                                <?php foreach ($categorias as $categoria): ?>
                                                    <div class="row">
                                                        <h3 class="Title-cat">
                                                        <a href="./categorias.php?id_categoria=<?= $categoria->getIdCategoria() ?>">
                                                            <?= htmlspecialchars($categoria->getNomeCategoria()) ?>
                                                        </a>
                                                        </h3>
                                                        <ul class="mega-links"></ul>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p class="no-categories">Nenhuma categoria encontrada</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>

                                <!-- Carrinho -->
                                <li class="icon-default-back">
                                    <a href="carrinho.php" class="nav_icon">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                        <span class="cart-count">
                                            <?php
                                            $totalQuantity = 0;
                                            if (!empty($_SESSION['cart'])) {
                                                $totalQuantity = array_sum(array_column($_SESSION['cart'], 'quantidade'));
                                            }
                                            echo $totalQuantity;
                                            ?>
                                        </span>
                                    </a>
                                </li>

                                <!-- Foto do Perfil -->
                                <li class="icon-default-back">
                                    <a class="conatiner_navbar_perfil_2" href="./perfil.php">
                                        <img class="img_navbar_2"
                                            src="<?= $cli && $cli['foto_perfil']
                                                ? htmlspecialchars($cli['foto_perfil'])
                                                : '../../src/imagens/cadastro/perfil/img_padrao_perfil.jpg' ?>"
                                            alt="Perfil">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </header>
