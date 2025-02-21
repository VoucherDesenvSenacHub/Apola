<?php

include "head.php";
include "navbar_deslogado.php";

?>
    <main  class="main2">
        <div class="container_cart">
            <div class="container_header_cart">
                <i class="fa-solid fa-chevron-left"></i>
                <div class="name_cart">SACOLA</div>
            </div>
            <div class="container_body_cart">
                <ul class="conatiner_list_item_cart">
                    <li>Produto</li>
                    <li>Preço</li>
                    <li>Quantidade</li>
                    <li>Total</li>
                </ul>
                <div class="shape_sacola"></div>
                <ul class="produto_list_cart">

                    <li class="produto_item_cart-1">
                        <div class="produto_item_cart_left">
                            <div class="container_img_produto_cart">
                                <img src="../../src/imagens/card_produto/IMG1-Produto.png" alt="">
                            </div>
                        </div>
                        <div class="produto_item_cart_right">
                            <h6 class="name_produto_cart">Amigurumi Ursos Sem Curso</h6>
                            <h6 class="detalhes_produto_cart">
                                <div class="cor_produto_cart">Cor - Preto //</div>
                                <div class="tamanho_produto_cart">Tamanho - 10 cm</div>
                            </h6>
                            <h6 class="detalhes_produto_cart_mobile">
                                <h6 class="desconto_produto_cart">-122.60 R$</h6>
                                <h6 class="preco_produto_cart">99,60 R$</h6>
                            </h6>

                        </div>
                    </li>
                    <li class="produto_item_cart-2">
                       <h6 class="desconto_produto_cart">- 122.60 R$</h6>
                       <h6 class="preco_produto_cart">99,60 R$</h6>
                    </li>
                    <li class="produto_item_cart-3">
                       <h6 class="subtrair_produto_cart">-</h6>
                        <h6 class="quant_produto_cart">1</h6>
                       <h6 class="adicionar_produto_cart">+</h6>
                    </li>
                    <li class="produto_item_cart-4 ">
                        <h6 class="preco_produto_cart">99,60 R$</h6>
                        <button class="container_remover_produto_cart">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </li>
                </ul>
                <div class="shape_sacola"></div>
            </div>
            <div class="conatiner_final_carrinho">
                <div class="conatiner_final_carrinho_left">
                    <div class="item_edereco_carrinho">
                        <div class="radio_cep" id="radio_cep2"></div>
                        <div class="text_carrinho_endereco">Endereço - Avenida Eucaliptos, 789, Centro, Rj - CEP: 79012-2321 </div>
                    </div>
                    <div class="item_edereco_carrinho">
                        <div class="radio_cep" id="radio_cep"></div>
                        <div class="text_carrinho_endereco">Outro endereço</div>
                    </div>
                    <div class="conatiner_cep_drop" id="conatiner_cep_drop">
                        <input type="text">
                        <button class="btn_input_cep" ><i class="fa-solid fa-truck"></i></button>
                    </div>
                    
                </div>
                <div class="conatiner_final_carrinho_right">
                    <div class="body_conatiner_final_right">
                        <div class="item_preco_carrinho">
                            <div class="preco_text_carrinho">
                                SubTotal
                                
                            </div>
                            <div class="preco_text_carrinho">
                                R$ 319,19

                            </div>
                        </div>
                        <div class="linha_preco_carrinho"></div>
                        <div class="item_preco_carrinho">
                            <div class="preco_text_carrinho">
                                Taxa de Entrega
                                
                            </div>
                            <div class="preco_text_carrinho">
                                R$ 22,69

                            </div>
                        </div>
                        <div class="linha_preco_carrinho"></div>
                        <div class="item_preco_carrinho">
                            <div style="font-weight: 600;" class="preco_text_carrinho">
                                Valor Total
                                
                            </div>
                            <div style="font-weight: 600;"class="preco_text_carrinho">
                                R$ 341,88

                            </div>
                        </div>
                        <div class="linha_preco_carrinho"></div>
                        <div class="conatiner_btn_finalizar_compra_cart">
                            <button data-modal="modal-1" class=" open-modal btn_finalizar">Finalizar Pedido</button>
                        </div>
                        <dialog id="modal-1">
                            <div class="modal_header">
                              <button class="close-modal" data-modal="modal-1"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="modal_body">
                              <h5 class="title_modal_zap">Pedido Realizado!</h5>
                              <div class="text_modal_zap">Segue o link do nosso WhatsApp para realizar o pagamento. Entraremos em contato em breve.</div>
                              <div class="conatiner_item_modal_link_zap">
                                <div class="item_modal_link_zap">
                                  <i class="fa-brands fa-whatsapp"></i>
                                  <a href="#">67 991924837</a>
                                </div>
                              </div>  
                            </div>
                          </dialog>
                          <script src="../../src/JS/modal.js"></script>
                    </div>

                </div>

            </div>
        </div>
       

    </main>
    
<?php

include "footer.php";



?>