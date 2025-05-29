<?php

include "head_adm.php";
include "nav_bar_adm.php";

?>


<main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                <a href="./listar_pedidos_adm.php" style="text-decoration: none; color: gray"><i class="fa-solid fa-chevron-left"></i></a>
                    <span class="title_adm">Pedido #4343</span>
                </div>
                <div class="container_title_adm_right">
                    <div class="conatiner_btn_adm mobile_btn_salvar">
                        <button class="btn_salvar_adm">Salvar</button>
                    </div>
                </div>
            </div>
            <div class="conatiner_cadastro_adm_items">
            <form action="" method="POST">
                <div class="conatiner_cadastro_adm_pedido_header">
                    <div class="item_flex_pedido">
                        <label for="">Cliente</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Contato</label>
                        <input readonly id="input_2_pedido" type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">CEP</label>
                        <input readonly id="input_2_pedido"  type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Rua</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">N°</label>
                        <input readonly id="input_3_pedido"  type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Bairro</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Cidade</label>
                        <input readonly type="text">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Estado</label>
                        <input readonly id="input_3_pedido" type="text">
                    </div>
                </div>
            </form>
            <div class="shape_pedido"></div>
            <form action="" method="POST">
                <div class="conatiner_cadastro_adm_pedido_body">
                    <div class="conatiner_cadastro_adm_pedido_body_left">
                        <div class="item_flex_pedido">
                            <label for="">Produto</label>
                            <input readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Quant.</label>
                            <input id="input_3_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Cor</label>
                            <input id="input_2_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Preço Total</label>
                            <input id="input_2_pedido" readonly type="text">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Status Pedido</label>
                            <select name="" id="">
                                <option value="">A pagar</option>
                                <option value="">Produção</option>
                                <option value="">Envio</option>
                                <option value="">Entregue</option>
                            </select>
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Código de Rastreio</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="conatiner_cadastro_adm_pedido_body_right">
                        <div class="item_flex_pedido">
                            <label for="">Imagem</label>
                            <div class="conatiner_img_pedido_adm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div  id="conatiner_btn_adm_pc" class="conatiner_btn_adm">
                
                <button class="btn_salvar_adm">Salvar</button>
            </div>
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>