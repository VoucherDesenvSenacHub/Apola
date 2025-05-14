<?php

include "head.php";
include "navbar_logado.php";

?>


    <main  class="main2">
        <div class="comprar_produto">
            <section class="comprar_produto_top">
                <div class="conatiner_name_produto_cat">
                    <h6>Home / Amigurumi / Amigo Urso</h6>
                </div>
                <div class="product-container">
                    <script src="../../src/JS/comprar_produto.js" defer></script>
                    <div class="product-thumb-container">
                        <div class="thumbnail-images">
                            <img src="../../src/imagens/imagem/225f5e94-7dfc-4418-a796-525a9e654ca6 2.png" alt="urso 1" class="thumbnail" data-image="../../src/imagens/imagem/225f5e94-7dfc-4418-a796-525a9e654ca6 2.png">
                            <img src="../../src/imagens/imagem/Amigurumi em Casa 2.png" alt="urso 2" class="thumbnail" 
                            data-image="../../src/imagens/imagem/Amigurumi em Casa 2.png">
                            <img src="../../src/imagens/imagem/Miniature Crochet Animals By Mohustore 2.png" alt="urso 3" class="thumbnail"
                            data-image="../../src/imagens/imagem/Miniature Crochet Animals By Mohustore 2.png">
                            <img src="../../src/imagens/imagem/🐼🐻SOMOS OSOS AMIGURUMIS 🐼🐻 - CROCHET -  BÁSICO🐼🐻 2.png" alt="urso 4" class="thumbnail" data-image="../../src/imagens/imagem/🐼🐻SOMOS OSOS AMIGURUMIS 🐼🐻 - CROCHET -  BÁSICO🐼🐻 2.png">
                        </div>
                        <div class="image-gallery">
                            <div class="image-gallery-urso">
                                <img src="../../src/imagens/imagem/225f5e94-7dfc-4418-a796-525a9e654ca6 2.png" id="main-image">
                            </div>
                            <div class="zoom-result" id="zoom-result"></div>
                        </div>
                    </div>
                    <script src="../../src/JS/comprar_produto.js"></script>

                    <div class="product-details">
                        <div class="product-details_left">
                            <div class="container_name_produto">
                                <h6>Amigurumi Urso sem Curso</h6>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="container_avaliacao_produto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="item_flex_produto">
                                <label for="">Cor</label>
                                <div class="item_flex_cor_produto">
                                    <div class="shape_cor_produto"></div>
                                    <div class="shape_cor_produto"></div>
                                    <div class="shape_cor_produto"></div>
                                    <div class="shape_cor_produto"></div>
                                </div>
                            </div>
                            <div class="item_flex_produto">
                                <label for="">tamanho</label>
                                <div class="item_flex_cor_produto">
                                    <div class="shape_tamanho_produto">10 cm</div>
                                    <div class="shape_tamanho_produto">15 cm</div>
                                    <div class="shape_tamanho_produto">20 cm</div>
                                    <div class="shape_tamanho_produto">25 cm</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-details_right">
                            <div class="container_preco_produto">
                                <span class="preco_antigo_produto">De R$ 122,69 </span>
                                <span class="preco_novo_produto">R$<div id="valor_produt">99.98</div></span>
                            </div>
                            
                            <div class="container_cep_produto">
                                <div class="item_flex_produto">
                                    <label for="">Cep</label>
                                    <div class="cep_container_input">
                                        <input type="text">
                                        <button class="btn_cep_produto"><i class="fa-solid fa-truck"></i></button>
                                    </div>
                                </div>
                            </div> 
                            <div class="container_buy_produto none_display">
                                <dialog id="modal-2">
                                    <div class="modal_header">
                                        <button class="close-modal" data-modal="modal-2"><i class="fa-solid fa-xmark"></i></button>
                                    </div>
                                    <div class="modal_body">
                                        <h5 class="title_modal_zap">Produto Comprado!
                                        </h5>
                                        <div class="text_modal_zap">
                                            Recebemos seu pedido e ele está em processo de análise. Em breve, você será notificado sobre a aprovação. 
                                            Fique atento às atualizações no seu e-mail ou painel de pedidos. Dúvidas entre em contato.
                                        </div>
                                        <div class="conatiner_item_modal_link_zap">
                                            <div class="item_modal_link_zap">
                                                <i class="fa-brands fa-whatsapp"></i>
                                                <a href="#">67 991924837</a>
                                            </div>
                                        </div>  
                                    </div>
                                </dialog>
                                <!-- O botão de compra -->
                                <button class="btn_buy_produto"  data-modal="modal-2">Comprar</button> <!-- AQUIIIIIII -->
                                <script src="../src/JS/modal.js" defer></script>
                                <!-- O botão da bolsa -->
                                <button class="btn_bag_produto">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                            </div>
                            <div class="container_buy_quant display_none_solo">
                                <div id='sub_item_solo' class="menos_cart"><i class="fa-solid fa-minus"></i></div>
                                <div  id='quant_item_solo' class="quant_cart_solo">1</div>
                                <div  id='sum_item_solo' class="mais_cart"><i class="fa-solid fa-plus"></i></div>
                            </div>
                        </div>
        
                    </div>
                    <div class="container_buy_produto2  ">
                        <div class="container_buy_buy none_display">
                            <button class="btn_buy_produto"><i class="fa-solid fa-bag-shopping"></i> Comprar</button>
                            <button class="btn_bag_produto"><i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                        <div class="container_buy_quant none_display">
                                <div id='sub_item_solo2' class="menos_cart"><i class="fa-solid fa-minus"></i></div>
                                <div  id='quant_item_solo2' class="quant_cart_solo">1</div>
                                <div  id='sum_item_solo2' class="mais_cart"><i class="fa-solid fa-plus"></i></div>
                            </div>
                    </div>
                    

                </div>
            </section>
            <section class="comprar_produto_medium">
                <div class="descricao_produto_solo_cont">
                    <div class="descricao_produto_solo_cont_header">
                        <div class="title_produto_solo_item">
                            Descrição
                        </div>
                        <div  id="icone_produto_solo_item" class="icone_produto_solo_item">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="descricao_produto_solo_cont_body">
                       <div class="descricao_solo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, quasi illum molestias exercitationem rerum cum illo maxime cupiditate labore nisi. Optio perferendis, velit ipsam reprehenderit sequi repellat consequatur earum tempore! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, beatae, blanditiis rerum voluptatem sit vero incidunt non odio debitis cum mollitia voluptates aperiam reprehenderit, quaerat esse deserunt expedita. Ut, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo asperiores in cupiditate. Possimus alias id quis aliquid perferendis quia cupiditate voluptatem tenetur iure. Tempora consectetur odio excepturi obcaecati praesentium? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus molestiae, officiis ex mollitia, eaque rerum debitis explicabo dicta minus incidunt ipsam quaerat non perspiciatis possimus exercitationem optio facilis qui ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia sint aliquam aliquid excepturi, laborum molestiae quia voluptas dolorem placeat fuga porro! Obcaecati debitis distinctio dolorum quis, repellat recusandae alias maiores?  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, maxime vitae. Quam praesentium ex molestiae, nobis obcaecati pariatur veritatis id commodi architecto voluptatibus sapiente error corrupti ab provident soluta aliquid?</div>
                    </div>
                    <div class="shape_solo"></div>
                </div>
                <div class="descricao_produto_solo_cont">
                    <div class="descricao_produto_solo_cont_header">
                        <div class="title_produto_solo_item">
                            Avaliação
                        </div>
                        <div id="icone_produto_solo_item" class="icone_produto_solo_item">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="descricao_produto_solo_cont_body">
                        <div class="container_comentarios">
                            <div class="conatiner_comentar_btn">
                                <button data-modal="modal-1" class ="btn_comentar open-modal">Avaliar</button>
                            </div>
                            <dialog id="modal-1">
                                <div class="modal_header">
                                <button class="close-modal" data-modal="modal-1"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="modal_body">
                                <h5 class="title_modal_zap">Avaliação</h5>
                                <div class="text_modal_zap">Gostou do produto? Sua opinião é essencial para que possamos continuar oferecendo a melhor experiência para nossos clientes. </div>
                                <div class="conatiner_item_modal_link_zap">
                                    <form action="">
                                        <div class="item_star_modal">
                                            <div class="conatiner_comentario_star_modal">
                                                <div class="stars">
                                                    <input type="checkbox" id="star1" class="star-checkbox">
                                                    <label for="star1" class="star">&#9733;</label>
    
                                                    <input type="checkbox" id="star2" class="star-checkbox">
                                                    <label for="star2" class="star">&#9733;</label>
    
                                                    <input type="checkbox" id="star3" class="star-checkbox">
                                                    <label for="star3" class="star">&#9733;</label>
                                                    
                                                    <input type="checkbox" id="star4" class="star-checkbox">
                                                    <label for="star4" class="star">&#9733;</label>
    
                                                    <input type="checkbox" id="star5" class="star-checkbox">
                                                    <label for="star5" class="star">&#9733;</label>
                                                </div>
                                                <!-- <i class="fa-solid fa-star " ></i>
                                                <i class="fa-solid fa-star" ></i>
                                                <i class="fa-solid fa-star" ></i>
                                                <i class="fa-solid fa-star" ></i> -->
                                            </div>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                            <div class="container_avalirar_btn">
                                                <button class="avaliar_btn">Comentar</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>  
                                </div>
                            </dialog>
                            <div class="comentario_item">
                                <div class="name_comentario">Lucas Nogueira</div>
                                <div class="conatiner_comentario_star">
                                    <i class="fa-solid fa-star " id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="comentario_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus tempore provident animi iusto dignissimos at beatae eum aspernatur doloribus hic deserunt, voluptatibus consectetur! Explicabo incidunt enim neque magni quod quae.
                                </div>  
                            </div>
                            <div class="shape_comentario"></div>
                            <div class="comentario_item">
                                <div class="name_comentario">Amanda Neto</div>
                                <div class="conatiner_comentario_star">
                                    <i class="fa-solid fa-star " id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="comentario_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore obcaecati architecto eaque accusantium tempore doloribus saepe ratione fugit sed quisquam libero, ea consequatur, ad nostrum dolores officia repellendus deserunt recusandae.
                                </div>  
                            </div>
                            <div class="shape_comentario"></div>
                            <div class="comentario_item">
                                <div class="name_comentario">Larissa Ribeiro</div>
                                <div class="conatiner_comentario_star">
                                    <i class="fa-solid fa-star " id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star" id='star_active'></i>
                                    <i class="fa-solid fa-star"  id='star_active'></i>
                                </div>
                                <div class="comentario_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eos natus eius neque sint sed maxime id, quo amet corrupti ipsa ut vitae sunt distinctio quis dolor? Est, distinctio dignissimos?
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="shape_solo"></div>
                </div>
            </section>
            
            



        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const openButtons = document.querySelectorAll('.open-modal');
    const closeButtons = document.querySelectorAll('.close-modal');

    openButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const modalId = e.currentTarget.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.showModal();
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const modalId = e.currentTarget.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.close();
            }
        });
    });

    // Novo código para o botão de "Comprar"
    const buyButton = document.querySelector('.btn_buy_produto');
    const modal2 = document.getElementById('modal-2');
    
    if (buyButton && modal2) {
        buyButton.addEventListener('click', () => {
            modal2.showModal(); // Abre o modal de pedido enviado
        });
    }
});

    </script>
<?php

include "footer.php";



?>