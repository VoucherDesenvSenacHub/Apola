<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>
    
    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <i class="fa-solid fa-chevron-left"></i>
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
                        <button class="btn_item_listar_adm">Todos</button>
                        <button class="btn_item_listar_adm">Ativo</button>
                        <button class="btn_item_listar_adm">Inativo</button>

                    </div>
                    <div class="container_listar_header_adm_right">
                        <input placeholder="Pesquisar categorias" type="search" name="" id="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <button class="btn_search_listar">Buscar</button>
                    </div>
                    

                </div>
                <div class="container_listar_body_adm">
                    <table class="table_adm_list">
                        <tr z>
                            <th id="text_alin_item"></th>
                            <th id="text_alin_item">categoria nome</th>
                            <th>quant. produtos</th>
                            <th>status</th>
                            <th>ações</th>
                        </tr>
                        <tr>
                            <td id="text_alin_item" >
                                <input class="check_box_list" type="checkbox" name="" id="">
                            </td>
                            <td class="nome_td">
                                <div class="conatiner_item_list_nome">
                                    <img src="" alt="">
                                    <div class="conatiner_text_nome_list">
                                        <p>Cachepô</p>
                                        <span>Lorem ipsum dolor sit amet consectetu.</span>
                                    </div>
                                    
                                </div>
                                
                            </td>
                            <td>
                                16
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