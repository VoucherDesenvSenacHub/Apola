<?php

include "head_adm.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
  width: 100%;
  border-collapse: collapse;
  font-family: sans-serif;
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.container_item_list_ações{
  background-color: transparent;
  border: none;
  cursor: pointer;
  font-size: 15px;
  transition: transform 0.2s;
}

</style>
<body onload='load_table()'>
        <header class="header_adm" >
                <nav class="navbar_adm" id="sidebar_adm">
                    <div id="sidebar_adm_content">
                        <div class="logo_sidebar">
                            <img  id="logo_adm" src="../../src/imagens/image.png" alt="">
                        </div>
                        <ul id="side_bar_itens">
                            <li class="side_bar-itens ">
                                <a style="text-decoration:none; " href="dashbord_adm.php">
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span class="text_side_item">Dashbord</span>
                                </a>
                            </li>
                            <li class="side_bar-itens active">
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
                                <a class="active_mob"  href="listar_pedidos_adm.php"><i class="fa-solid fa-truck"></i></a>
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
                        <span class="title_adm">Pedidos</span>
                    </div>
                    <div class="container_title_adm_right">
                        <!-- <input type="text" placeholder="Pesquisar...">
                        <i class="fa-solid fa-magnifying-glass"></i> -->

                    </div>
                    
                </div>
                <div class="conatiner_cont_dados_adm">
                    <div class="card_item_dados">
                        <i class="fa-solid fa-dolly"></i>
                        <div class="item_dados_adm">
                            <p class="n_item_dados">N° 45</p>
                            <p class="text_item_dados">Total de Pedidos</p>
                        </div>
                    </div>
                    <div class="shape_dados"></div>
                    <div class="card_item_dados">
                        <i class="fa-solid fa-money-bill"></i>
                        <div class="item_dados_adm">
                            <p class="n_item_dados">N° 23</p>
                            <p class="text_item_dados">Total a pagar</p>
                        </div>
                    </div>
                    <div class="shape_dados"></div>
                    <div class="shape_dados_mobile"></div>
                    <div class="card_item_dados">
                        <i class="fa-solid fa-box"></i>
                        <div class="item_dados_adm">
                            <p class="n_item_dados">N° 34</p>
                            <p class="text_item_dados">Total Disponivel</p>
                        </div>
                    </div>
                    <div class="shape_dados"></div>
                    <div class="card_item_dados">
                        <i class="fa-solid fa-gift"></i>
                        <div class="item_dados_adm">
                            <p class="n_item_dados">N° 11</p>
                            <p class="text_item_dados">Total Personalizado</p>
                        </div>
                    </div>

                </div>
                <div class="conatiner_listar_adm">
                    <div class="container_listar_header_adm">
                        <div class="container_listar_header_adm_left">
                            <button id="btn_item_listar_adm">A pagar</button>
                            <button id="btn_item_listar_adm">Produção</button>
                            <button id="btn_item_listar_adm">Envio</button>
                            <button id="btn_item_listar_adm">Entregue</button>
                        </div>
                        <div class="container_listar_header_adm_right">
                            <input id="input_search" placeholder="Pesquisar Nº do pedido" type="search" name="" id="">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <button id="btn_search_listar">Buscar</button>
                        </div>
                    </div>
                    <div class="container_listar_body_adm">
                    <table class="table_adm_list" id='tabela'>
                        <thead>
                            <th>numero</th>
                            <th>total</th>
                            <th>tipo</th>
                            <th id="Mob_table_none_th" >estado</th>
                            <th>ações</th>
                        </thead>
                        <tbody id="dados">   
                        </tbody>
                    </table>
                    </div>


                </div>
                
            
            </div>
        

        </main>


        <script src="../../src/JS/load_table.js"></script>
</body>
</html>
