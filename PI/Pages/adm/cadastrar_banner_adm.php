<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>  

    
    <main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                    <span class="title_adm">Cadastrar Banners</span>
                </div>
                <div class="container_title_adm_right">
                </div>
                
            </div>
           <div class="conatiner_cadastro_adm_items">
                <div class="top_container_cadastrar_produto_adm">
                    <!-- Banners Principais -->
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Principais</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1400x400px)</div>
                        <form class="container_banner_wrap" id="banner-principal">
                            <div class="banner-item">
                                <img src="../src/imagens/banner/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"> <i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/banner/2.png" alt="Imagem 2" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/banner/3.png" alt="Imagem 3" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </div>

                    <!-- Banners Secundários-->

                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Secundários</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1700x700px)</div>
                        <div class="container_banner_wrap" id="banner-secundario">
                            <div class="banner-item">
                                <img src="../src/imagens/banner/3.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </div>
            
                    <!-- Banners Promocionais -->
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Promocionais</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1700x700px)</div>
                        <div class="container_banner_wrap-promocional" id="banner-secundario">
                            <div class="banner-item-promocional">
                                <img src="../src/imagens/card_promocional/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display: none;">
                            </div>
                            <div class="quadro-banners-promo">
                                <div class="banner-item-promo">
                                    <img src="../src/imagens/card_promocional/2.png" alt="Imagem 2" class="preview-image banner-image">
                                    <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                    <input type="file" class="file-upload" accept="image/*" style="display: none;">
                                </div>
                                <div class="banner-item-promo">
                                    <img src="../src/imagens/card_promocional/3.png" alt="Image 3" class="preview-image banner-image">
                                    <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                    <input type="file" class="file-upload" accept="image/*" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </div>
            
                    <!-- Banners Mobile -->
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Mobile</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1080x1080px)</div>
                        <div class="container_banner_wrap" id="banner-mobile">
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                            <div class="banner-item">
                                <img src="../src/imagens/img_banner_menu/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </div>
            
                    <!-- Banners Categoria
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Categoria</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (750x980px)</div>
                        <div class="container_banner_wrap" id="banner-categoria">
                            <div class="banner-item">
                                <img src="../src/imagens/img_categorias_2/7.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div class="container_btn_salvar_excluir_produto_mobile">
                            <button class="btn_salvar_produto">Salvar</button>
                        </div>
                    </div> -->
            
                    <!-- Banners Sobre Mim -->
                    <div class="item_top_produto">
                        <h4 class="title_banner_categoria">Banners Sobre Mim</h4>
                        <div class="tamanho_banner_adm">Tamanho recomendável (1000x500px)</div>
                        <div class="container_banner_wrap" id="banner-sobre-mim">
                            <div class="banner-item">
                                <img src="../src/imagens/SobreMim/1.png" alt="Imagem 1" class="preview-image banner-image">
                                <button class="trocar-imagem-btn"><i class="fa-solid fa-plus"></i><i class="fa-solid fa-file-image"></i></button>
                                <input type="file" class="file-upload" accept="image/*" style="display:none;">
                            </div>
                        </div>
                        <div  class="conatiner_btn_adm ">
                            <button class="btn_salvar_adm">Salvar</button>
                        </div>
                    </div>            
                </div>
            </div>
            
        
        </div>
    

    </main>

    <script src="cadastrar_banner.js"></script>
    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>