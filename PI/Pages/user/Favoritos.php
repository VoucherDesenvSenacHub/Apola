<?php

include "head.php";
include "navbar_logado.php";

?>
    <main  class="main2">
        <section class="container_favortos">
            <div class="left-container_favoritos">
                <div class="container_favoritos_left">
                    <div class="title_left_favoritos">Meu Perfil</div>
                    <ul>
                    <li class="item_favorito_left">
                            <i class="fa-solid icon_favorito_content  fa-house"></i><a class="link_favorito_left" href="./perfil.php">Conta</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid icon_favorito_content fa-heart"></i><a  class="link_favorito_left" href="./Favoritos.php">Favoritos</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid  icon_favorito_content fa-boxes-stacked"></i><a class="link_favorito_left" href="./historico_pedido.php">Histórico de Pedidos</a>
                        </li>
                        <li class="item_favorito_left">
                            <i class="fa-solid fa-pencil icon_favorito_content"></i><a class="link_favorito_left" href="./alterar_perfil.php">Alterar Perfil</a>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="right_container_favoritos">
                <div class="container_favoritos_right">
                    <div class="banner_container_favoritos">
                        <img src="../../src/imagens/banner/1.png" alt="">
                    </div>
                    <div class="item_conteudo_favoritos">
                        
                        <div class="card_produto">
                        <div class="icon_favorite">
                            <label class="checkbox-heart">
                                <input type="checkbox">
                                <i class="fa-solid fa-heart"></i>
                            </label> 
                        </div>
                            <div class="img_content_produto">
                                <img src="../../src/imagens/card_produto/IMG1-Produto.png" alt="">
                            </div>
                            <div class="conteudo_card">
                                <div class="nome_card_produto">Amigurmi Raposa</div>
                                <div class="content_star_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="preco_card_produto">R$ 50,89</div>
                                <div class="btn_content_card_produto">
                                    <div class="btn_bag_card"><i class="fa-solid fa-bag-shopping"></i></div>
                                    <div class="btn_buy_card">Comprar</div>
                                </div>
                            </div>
                        </div>
                        <div class="card_produto">
                        <div class="icon_favorite">
                            <label class="checkbox-heart">
                                <input type="checkbox">
                                <i class="fa-solid fa-heart"></i>
                            </label> 
                        </div>
                            <div class="img_content_produto">
                                <img src="../../src/imagens/card_produto/IMG1-Produto.png" alt="">
                            </div>
                            <div class="conteudo_card">
                                <div class="nome_card_produto">Amigurmi Raposa</div>
                                <div class="content_star_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="preco_card_produto">R$ 50,89</div>
                                <div class="btn_content_card_produto">
                                    <div class="btn_bag_card"><i class="fa-solid fa-bag-shopping"></i></div>
                                    <div class="btn_buy_card">Comprar</div>
                                </div>
                            </div>
                        </div>
                        <div class="card_produto">
                        <div class="icon_favorite">
                            <label class="checkbox-heart">
                                <input type="checkbox">
                                <i class="fa-solid fa-heart"></i>
                            </label> 
                        </div>
                            <div class="img_content_produto">
                                <img src="../../src/imagens/card_produto/IMG1-Produto.png" alt="">
                            </div>
                            <div class="conteudo_card">
                                <div class="nome_card_produto">Amigurmi Raposa</div>
                                <div class="content_star_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="preco_card_produto">R$ 50,89</div>
                                <div class="btn_content_card_produto">
                                    <div class="btn_bag_card"><i class="fa-solid fa-bag-shopping"></i></div>
                                    <div class="btn_buy_card">Comprar</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>



    </main>
<?php

include "footer.php";



?>