<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../src/Css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
    <!-- SCRIPT MENU MOBILE -->
    <script src="../../src/JS/banner.js" defer></script>
    <script src="../../src/JS/comprar_produto.js" defer></script>
    <script src="../../src/JS/drop_cep.js" defer></script>
    <script src="../../src/JS/drop_pedido.js" defer></script>
    <script src="../../src/JS/filtro-mobile.js" defer></script>
    <script src="../../src/JS/list_adm.js" defer></script>
    <script src="../../src/JS/list_controle_adm.js" defer></script>
    <script src="../../src/JS/menu-mobile.js" defer></script>
    <script src="../../src/JS/modal.js" defer></script>
    <script src="../../src/JS/swiper_sobre.js" defer></script>
    <!-- <script src="../../src/JS/swipper_card.js" defer></script> -->


    <title>Home</title>
</head>

<body>

    <!-- INICIO MeENU NAVABAR -->
    <header class="menu">
        <nav class="container-menu">
                <div class="img-menu">
                    <a href="./Home.php">
                        <img src="../../Src/imagens/Apola__1_-removebg-preview.png" alt=""class="img-logo" >
                    </a>
                </div>
                <div class="barra-pesquisa">
                    <div class="container-barra">
                        <input class="input-pesquisa" type="text" placeholder="Pesquise seu produto...">
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
                    <div class="content-mobile-top">
                        <div class="img-content-mobile">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="text-content-mobile"><span>Faça seu login ou cadastra-se</span></div>
                    </div>
                    <div class="content-mobile-btn-login-cad">
                        <button class="btn-login-mobile">
                            <a href="./login.php">Login</a>

                        </button>
                        <button class="btn-cadastro-mobile">
                            <a href="./cadastro.php">Cadastro</a>
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
                                <i class="fa-solid fa-fire"></i>
                                <a href="">Mais Vendidos</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-dollar-sign"></i>
                                <a href="">Ofertas</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-box"></i>
                                <a href="./produto_personalizado.php">Produto Personalizado</a>
                            </li>
                            <li>
                                <i class="fa-solid fa-people-group"></i>
                                <a href="./SobreNos.php">Sobre Nós</a>
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
                                <a href="">Categorias<i class="fa-solid fa-chevron-down icon-seta"></i></a>
                                <div class="mega-menu">
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <h3 class="Title-cat"><a href="">Amigurumi</a></h3>
                                            <ul class="mega-links">
                                                <li><a href="">Amigurumi Cacto</a></li>
                                                <li><a href="">Amigurumi Cacto</a></li>
                                                <li><a href="">Amigurumi Cacto</a></li>
                                                <li><a href="">Amigurumi Cacto</a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <h3 class="Title-cat"><a href="">Cachepô</a></h3>
                                            <ul class="mega-links">
                                                <li><a href="">Cachepô Cacto</a></li>
                                                <li><a href="">Cachepô Cacto</a></li>
                                                <li><a href="">Cachepô Cacto</a></li>
                                                <li><a href="">Cachepô Cacto</a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <h3 class="Title-cat"><a href="">Porta-Chaves</a></h3>
                                            <ul class="mega-links">
                                                <li><a href="">Porta-Chaves Cacto</a></li>
                                                <li><a href="">Porta-Chaves Cacto</a></li>
                                                <li><a href="">Porta-Chaves Cacto</a></li>
                                                <li><a href="">Porta-Chaves Cacto</a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <h3 class="Title-cat"><a href="">Bordado</a></h3>
                                            <ul class="mega-links">
                                                <li><a href="">Bordado Cacto</a></li>
                                                <li><a href="">Bordado Cacto</a></li>
                                                <li><a href="">Bordado Cacto</a></li>
                                                <li><a href="">Bordado Cacto</a></li>
                                            </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="icon-default-back">
                                <a id="icon-default" href="./carrinho.php"><i class="fa-solid fa-bag-shopping"></i></a>
                            </li>
                            <li class="icon-default-back">
                                <a id="icon-default" href=""><i class="fa-solid fa-user"></i></a>
                                <ul class="drop-menu">
                                    <div class="shape-perfil"></div>
                                    <li><a href="./login.php">Login</a></li>
                                    <li><a href="./cadastro.php">Cadastro</a></li>
                                </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
        </nav>
        <!-- FIM MENU NAVBAR -->
    </header>