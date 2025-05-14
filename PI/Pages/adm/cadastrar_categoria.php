<?php


include "navbar_adm.php";

?>


    <main  class="main2">
        <div class="cadastrar_produto_adm">
            <div class="title_continer_cadastrar_produto_adm">
                <a href="" onclick="history.back(); return false;"><i class="fa-solid fa-chevron-left"></i></a>
                <h6 class="title_adm_default"> Nova Categoria</h6>
            </div>
            <div class="container_btn_salvar_excluir_produto_mobile">
                <button class="btn_excluir_produto">Excluir</button>
                <button class="btn_salvar_produto">Salvar</button>
            </div>
            <div class="continer_cadastrar_produto_adm">
                <div class="top_container_cadastrar_categoria_adm">
                    <div class="left_conatiner_cadastrar_categoria_adm">
                        <div class="item_top_produto">
                            <label for="">Titulo</label>
                            <input type="text">
                        </div>
                        <div class="item_top_produto">
                            <label for="">Status</label>
                            <select name="" id="">
                                <option value="op1">Ativo</option>
                                <option value="op1">Inativo</option>
                            </select>
                        </div>
                        <div class="item_top_produto">
                            <label for="">Descrição</label>
                            <textarea name="" id="">
                            </textarea>
                        </div>
                    </div>
                    <div class="right_conatiner_cadastrar_categoria_adm">
                        <div class="container_title_imf_cat"><h6>Imagem</h6></div>
                            <div class="conatiner_img_categoria">
                                <div class="container_input_file"><i class="fa-solid fa-plus"></i></div>
                                <img src="../src/imagens/card_produto/IMG1-Produto.png" alt="">
                            </div>
                            <div class="tamanho_banner_adm">Tamanho recomendavel (1700x700px)</div>
                    </div>
                    
                </div>
                <div class="medium_container_cadastrar_categoria_adm">
                    <div class="container_medium_title_categoria">
                        <div class="item_top_produto item_categoria_top">
                            <label for="">Pesquisar Produto</label>
                            <input type="text">
                        </div>
                        <button class="btn_busca_categoria">Buscar</button>
                        <button class="btn_busca_categoria_2">+ Produto</button>
                    </div>
                    <div class="lista_categoria_adm">
                        <div class="container_lista_categoria_adm">
                            <div class="item_lista_categoria_adm">
                                <h6 class="id_categoria_adm">1</h6>
                                <img class="img_produto_categoria_adm" src="../src/imagens/img_categorias/caneca.png" alt="">
                                <h6 class="nome_categoria_adm">Cachepô MDF</h6>
                                <div class="status_produto_categoria_adm">Ativo</div>
                                <a href="" class="excluit_produto_categoria_adm"><i class="fa-solid fa-trash"></i></a>
                            </div>

                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="container_btn_salvar_excluir_produto">
            <button class="btn_salvar_produto">Salvar</button>
            <button class="btn_excluir_produto">Excluir</button>
        </div>

        
    </main>
</body>
</html>