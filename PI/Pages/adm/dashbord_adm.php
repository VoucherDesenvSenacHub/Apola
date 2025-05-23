<?php
include "head_adm.php";
?>
<header class="header_adm">
    <nav class="navbar_adm" id="sidebar_adm">
        <div id="sidebar_adm_content">
            <div class="logo_sidebar">
                <img id="logo_adm" src="../../src/imagens/image.png" alt="Logo">
            </div>
            <ul id="side_bar_itens">
                <li class="side_bar-itens active">
                    <a style="text-decoration:none;" href="dashbord_adm.php">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="text_side_item">Dashboard</span>
                    </a>
                </li>
                <li class="side_bar-itens">
                    <a style="text-decoration:none;" href="listar_pedidos_adm.php">
                        <i class="fa-solid fa-truck"></i>
                        <span class="text_side_item">Pedidos</span>
                    </a>
                </li>
                <li class="side_bar-itens">
                    <a style="text-decoration:none;" href="listar_produtos_adm.php">
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
                    <a class="active_mob" href="dashbord_adm.php"><i class="fa-solid fa-chart-simple"></i></a>
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
                    <a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
            </ul>    
        </div>
    </nav>

</header>
<main class="main_adm" id="main_adm_grafic">
    <div class="conatiner_dashbord_adm">
        <div class="Title_deafult_adm">
            <div class="container_title_adm_left">
                <span class="title_adm">Dashboard</span>
            </div>
            <!-- <div class="container_title_adm_right">
                <input type="text" placeholder="Pesquisar...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
        </div>

        <div class="conatiner_dados_dashbord">
            <div class="cont_dados">
                <div class="metric_card clics">
                    <p>Clicks</p>
                    <p>220</p>
                    <div id="graficoClicks"></div>
                </div>
                <div class="metric_card view">
                    <p>Views</p>
                    <p>140</p>
                    <div id="graficoViews"></div>
                </div>
                <div class="metric_card leads">
                    <p>Leads</p>
                    <p>60</p>
                    <div id="graficoLeads"></div>
                </div>
                <div class="metric_card sale">
                    <p>Sales</p>
                    <p>30</p>
                    <div id="graficoSales"></div> 
                </div>
            </div>
            <!-- <div class="grafico_dados">
                <div class="grafico_dados_1">
                    <h2>Vendas (Ano)</h2>
                    <div id="grafico_vendas_anos"></div>
                </div>
                <div class="grafico_dados_2">
                    <h2>Categorias Vendidas (Dia)</h2>
                    <div id="grafico_categorias_vendidas"></div>
                </div>
                <div class="grafico_dados_3">  
                    <h2>Visitas no site</h2>
                    <div id="grafico_entrada_clientes"></div>
                </div>
            </div> -->
            <div class="pesquisa_geral_dados_produtos">
                <div class="grafico_geral_produtos">
                    <h2>Produtos mais Vendidos</h2>
                    <div class="area_grafico">
                        <div id="grafico1"></div>
                    </div>
                    
                </div>
                <div class="grafico_geral_produtos">
                    <h2>Categorias mais vendidas</h2>
                    <!-- <div class="progress-container" id="progress1"></div>
                    <div class="progress-container" id="progress2"></div>
                    <div class="progress-container" id="progress3"></div>
                    <div class="progress-container" id="progress4"></div> -->
                    <div class="area_grafico">
                        <div id="grafico2"></div>
                    </div>
                    
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        </div>
    
    </div>

</main>

<script src="adm_nav.js"></script>

<script>
</script>
</body>
</html>

