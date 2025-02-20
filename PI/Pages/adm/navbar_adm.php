<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../../src/Css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../../src/JS/banner.js" defer></script>
    <script src="../../src/JS/comprar_produto.js" defer></script>
    <script src="../../src/JS/drop_cep.js" defer></script>
    <script src="../../src/JS/drop_pedido.js" defer></script>
    <script src="../../src/JS/filtro-mobile.js" defer></script>
    <script src="../../src/JS/menu-mobile.js" defer></script>
    <script src="../../src/JS/modal.js" defer></script>
    <script src="../../src/JS/navbar_adm.js" defer></script>
    <script src="../../src/JS/swiper_sobre.js" defer></script>
    <script src="../../src/JS/swipper_card.js" defer></script>
    <script src="../../src/JS/list_adm.js" defer></script>

    <title>Navbar ADM</title>
</head>
<body class="body_adm">
    <header>
        <div class="nav" id="nav">
            <a href="#" class="nav__logo" id="nav_logo_id">
                <div class="logo">
                    <img src="../../src/imagens/Apola__1_-removebg-preview.png" alt="">
                </div>
            </a>
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="nav__list">
                    

                    <a href="../adm/analise_adm.php" class="nav__link">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="../adm/listar_pedidos_adm.php" class="nav__link">
                        <i class="fa-solid fa-truck"></i>
                        <span class="nav__name">Pedidos</span>
                    </a>
            
                    <a href="../adm/listar_produto_adm.php" class="nav__link">
                        <i class="fa-solid fa-box"></i>
                        <span class="nav__name">Produtos</span>
                    </a>

                    <a href="../adm/listar_categoria_adm.php" class="nav__link">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span class="nav__name">Categorias</span>
                    </a>
                    <a href="../adm/cadastrar_banner.php" class="nav__link">
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="nav__name">Banners</span>
                    </a>
                </div>
                <div class="container_btn_sair_nav_dm">
                    <button id="text_adm_nav"><i class="fa-solid fa-arrow-right-from-bracket"></i> Sair</button>
                </div>
            </nav>
        </div>
    </header>
