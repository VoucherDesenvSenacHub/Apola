<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>


    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <span class="title_adm">Produtos</span>
                </div>
                <div class="container_title_adm_right">
                    <a style="text-decoration:none;" href="cadastrar_produto_adm.php"><button class="btn_add_item_adm">+ Produto</button></a>
                </div>
                
            </div>
            <div class="conatiner_cont_dados_adm">
                <div class="card_item_dados">
                    <i class="fa-solid fa-dolly"></i>
                    <div class="item_dados_adm">
                        <p class="n_item_dados">N° 45</p>
                        <p class="text_item_dados">Total de Produtos</p>
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
                        <input id="input_search" placeholder="Pesquisar produto" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button id="btn_search_listar">Buscar</button>
                    </div>
                    

                </div>
                <div class="container_listar_body_adm">
                    <table class="table_adm_list">
                        <tr z>
                            <th class="none_mob" id="text_alin_item"></th>
                            <th id="text_alin_item">produto nome</th>
                            <th>estoque</th>
                            <th>categoria</th>
                            <th>status</th>
                            <th>ações</th>
                        </tr>
                        <tr>
                            <td class="none_mob" id="text_alin_item" >
                                <input class="check_box_list" type="checkbox" name="" id="">
                            </td>
                            <td class="nome_td">
                                <div class="conatiner_item_list_nome">
                                    <img src="" alt="">
                                    <div class="conatiner_text_nome_list">
                                        <p>Cachepô de Crochê</p>
                                        <span>Lorem ipsum dolor sit amet consectetu.</span>
                                    </div>
                                    
                                </div>
                                
                            </td>
                            <td>
                                16
                            </td>
                            <td>
                                Cachepô
                            </td>
                            <td>
                                <div class="container_item_list_status">
                                    <div class="shape_status"></div>
                                    ativo
                                    
                                </div>
                            </td>
                            <td>
                                <div class="container_item_list_ações">
                                    <a href=""><i class="fa-solid fa-pencil"></i></a>
                                    <input checked="true" type="checkbox" class="switch">
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>


            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>