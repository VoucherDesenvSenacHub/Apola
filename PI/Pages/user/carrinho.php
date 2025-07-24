<?php


require '../../App/config.inc.php';

require '../../App/Session/Login.php';

include "head.php";


$result = Login::IsLogedCliente();


if($result){
    include "navbar_logado.php";
}else{
    header('location: login.php');
}

$id_cliente = $_SESSION['cliente']['id_cliente'];

$cliente = Cliente::getClienteById($id_cliente);



?>
    <main  class="main2">
        <div class="container_cart">
            <div class="container_header_cart">
                <a href="./Home.php" style="text-decoration: none;"><i class="fa-solid fa-chevron-left"></i></a>
                <div class="name_cart">SACOLA</div>
            </div>
            <div class="container_body_cart">
                <ul class="conatiner_list_item_cart">
                    <li>Produto</li>
                    <li>Preço Un.</li>
                    <li>Quantidade</li>
                    <li>Total</li>
                </ul>
                <div class="shape_sacola"></div>
                <div class="teste-cart" id="DivIdCart">
        

                </div>
              
            </div>
            <div class="conatiner_final_carrinho">
                <div class="conatiner_final_carrinho_left">
                    <div class="item_edereco_carrinho">
                        <div class="radio_cep" id="radio_cep2"></div>
                        <div class="text_carrinho_endereco">
                            Endereço - <?= $cliente['rua'] ?>, <?= $cliente['numero_casa'] ?>, <?= $cliente['bairro'] ?>, <?= $cliente['estado'] ?> - CEP: <?= $cliente['cep'] ?>
                        </div>

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
                                    <a href="https://wa.me/">67 991924837</a>
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