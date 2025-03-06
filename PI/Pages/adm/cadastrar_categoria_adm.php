<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>
    
    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <i class="fa-solid fa-chevron-left"></i>
                    <span class="title_adm">Nova Categoria</span>
                </div>
                <div class="container_title_adm_right">
                    <div class="conatiner_btn_adm mobile_btn_salvar">
                        <button class="btn_excluir_adm">Excluir</button>
                        <button class="btn_salvar_adm">Salvar</button>
                    </div>
                </div>
                
            </div>
            <div class="conatiner_cadastro_adm_items">
                <div class="conatiner_cadastro_adm_items_header">
                    <div class="conatiner_cadastro_adm_items_header_left">
                        <div class="item_flex_adm">
                            <label for="">Titulo</label>
                            <input type="text">
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Status</label>
                            <select name="" id="">
                                <option value="">Ativo</option>
                                <option value="">Inativo</option>
                            </select>
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Descrição</label>
                            <textarea name="" id=""></textarea>
                        </div>
                        
                    </div>
                    <div class="conatiner_cadastro_adm_items_header_right">
                        <div class="item_flex_adm">
                            <label for="">Imagem</label>
                            <div class="conatiner_img_add_adm">

                            </div>
                            <p class="text_tamanho_img">Tamanho recomendavel (1700x700px)</p>
                        </div>

                    </div>
                </div>
                <div class="conatiner_cadastro_adm_items_body">
                    <div class="conatiner_cadastro_adm_items_body_pesquisa">
                        <div class="item_flex_adm">
                            <label for="">Pesquisar Produto</label>
                            <input type="text">
                        </div>
                        <button class="btn_buscar_pesquisa">Buscar</button>
                        <button class="btn_produto_add">+ Produto</button>

                    </div>
                    <div class="conatiner_cadastro_adm_items_body_list">
                        <table class="table_adm_list">
                            <tr z>
                                <th id="text_alin_item">ID</th>
                                <th id="text_alin_item">produto</th>
                                <th>estoque</th>
                                <th>status</th>
                                <th>ações</th>
                            </tr>
                            <tr>
                                <td id="text_alin_item" >
                                   1
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
                            <tr>
                                <td id="text_alin_item" >
                                   1
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
            <div id="conatiner_btn_adm_pc" class="conatiner_btn_adm">
                <button class="btn_excluir_adm">Excluir</button>
                <button class="btn_salvar_adm">Salvar</button>
            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>