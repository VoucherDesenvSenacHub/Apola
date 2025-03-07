<?php

include "head_adm.php";
// include "nav_bar_adm.php";

?>
<header class="header_adm" >
            <nav class="navbar_adm" id="sidebar_adm">
                <div id="sidebar_adm_content">
                    <div class="logo_sidebar">
                        <img  id="logo_adm" src="OIP.jpeg" alt="">
                    </div>
                    <ul id="side_bar_itens">
                        <li class="side_bar-itens  active">
                            <a  style="text-decoration:none; " href="dashbord_adm.php">
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
                        <li class="side_bar-itens">
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
                        <a href="#">
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
                            <a class="active_mob"  href="dashbord_adm.php"><i class="fa-solid fa-chart-simple"></i></a>
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
                            <a href="cadastrar_banner_adm.php"><i class="fa-solid fa-bookmark"></i></a>
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
                    <i class="fa-solid fa-chevron-left"></i>
                    <span class="title_adm">Dashbord</span>
                </div>
                <div class="container_title_adm_right">
                    <input type="text" placeholder="Pesquisar...">
                    <i class="fa-solid fa-magnifying-glass"></i>

                </div>
            </div>
            <div class="conatiner_dados_dashbord">
                <div class="cont_dados">
    
                </div>
                <div class="grafico_dados">
                    <div class="grafico_dados_1">
                        teste
                        
                    </div>
                    <div class="grafico_dados_2">
                        teste2

                    </div>
                </div>
                <div class="pesquisa_geral_dados_produtos">

                </div>

            </div>
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
</body>
</html>