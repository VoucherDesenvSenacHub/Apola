<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>

    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <a href="./listar_produtos_adm.php" style="text-decoration: none;"><i class="fa-solid fa-chevron-left"></i></a>
                    <span class="title_adm">Novo Produto</span>
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
                            <label for="">Categoria</label>
                            <select name="" id="">
                                <option value="">Amigurumi</option>
                                <option value="">Cachepô</option>
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
                    <div class="conatiner_cadastro_adm_items_body_add">
                        <div class="item_flex_adm">
                            <label for="">Adicionar Cor</label>
                            <input class="input_adcionar_produto" type="text">
                        </div>
                        <button class="btn_produto_add">Adicionar</button>
                        <div class="item_flex_adm">
                            <label for="">Adicionar Tamanho</label>
                            <input class="input_adcionar_produto" type="text">
                        </div>
                        <button class="btn_produto_add">Adicionar</button>
                        <div class="item_flex_adm">
                            <label for="">Adicionar Estoque</label>
                            <input class="input_adcionar_produto" type="text">
                        </div>
                        <button class="btn_produto_add">Adicionar</button>

                    </div>



                </div>

            </div>
            <div id="conatiner_btn_adm_pc"  class="conatiner_btn_adm">
                <button class="btn_excluir_adm">Excluir</button>
                <button class="btn_salvar_adm">Salvar</button>
            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>