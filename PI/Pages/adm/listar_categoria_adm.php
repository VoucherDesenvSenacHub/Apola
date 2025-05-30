<?php

include "head_adm.php"; 
include "nav_bar_adm.php";

?>
<body onload='load_table()'>    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <span class="title_adm">Categorias</span>
                </div>
                <div class="container_title_adm_right">
                <a style="text-decoration:none;" href="cadastrar_categoria_adm.php"><button class="btn_add_item_adm">+ Categoria</button></a>
                </div>
                
            </div>
            <div class="conatiner_cont_dados_adm">
                <div class="card_item_dados">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 45</p>
                        <p class="text_item_dados">Total de Categorias</p>
                    </div>
                </div>
                <div class="shape_dados"></div>
                <div class="card_item_dados">
                    <i class="fa-solid fa-circle-xmark"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 23</p>
                        <p class="text_item_dados">Total Inativos</p>
                    </div>
                </div>
                <div class="shape_dados"></div>
                <div class="card_item_dados">
                    <i class="fa-solid fa-check"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 34</p>
                        <p class="text_item_dados">Total Ativos</p>
                    </div>
                </div>

            </div>
            <div class="conatiner_listar_adm">
                <div class="container_listar_header_adm">
                    <div class="container_listar_header_adm_left">
                        <button id="btn_item_listar_adm">Todos</button>
                        <button id="btn_item_listar_adm">Ativo</button>
                        <button id="btn_item_listar_adm">Inativo</button>

                    </div>
                    <div class="container_listar_header_adm_right">
                        <input id="input_search" placeholder="Pesquisar categorias" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button id="btn_search_listar">Buscar</button>
                    </div>
                    

                </div>
                <!-- <script src="../../src/JS/load_table_categorias.php" defer></script> -->
                <div class="container_listar_body_adm">
                <table class="table_adm_list" id="dados_categoria">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="dados">
                        <!-- Dados dinâmicos serão inseridos aqui via JavaScript -->
                    </tbody>
                </table>
                </div>
            </div>
        </div>  
    </main>
</body>
</html>