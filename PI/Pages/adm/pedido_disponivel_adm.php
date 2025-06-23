<?php
session_start();
// include "head_adm.php";
include "nav_bar_adm.php";


$id = $_GET['id'];
$buscar = new Pedido();
$pedido_cliente = $buscar->buscar_by_id($id);

// print_r($pedido_cliente);
if(isset($_POST['salvarPedido'])){
    // echo '<script>alert("Opa!")</script>';
    $status = $_POST['status_pedido'];
    $codigo = $_POST['rastreio_pedido'];

    $pedido_cliente->atualizar($id[
        $status
    ]);
}   
?>
    
<main class="main_adm">
        <div class="conatiner_dashbord_adm">
            <div class="Title_deafult_adm">
                <div class="container_title_adm_left">
                <a href="./listar_pedidos_adm.php" style="text-decoration: none; color: gray"><i class="fa-solid fa-chevron-left"></i></a>
                    <span class="title_adm">Pedido #<?= $_GET['id']; ?></span>
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
                        <input readonly type="text" value="<?= $pedido_cliente->nome_cliente .' '. $pedido_cliente->sobrenome ; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Contato</label>
                        <input readonly id="input_2_pedido" type="text" value="<?= $pedido_cliente->contato; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">CEP</label>
                        <input readonly id="input_2_pedido"  type="text" value="<?= $pedido_cliente->cep; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Rua</label>
                        <input readonly type="text" value="<?= $pedido_cliente->rua; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">N°</label>
                        <input readonly id="input_3_pedido" type="text" value="<?= $pedido_cliente->numero; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Bairro</label>
                        <input readonly type="text" value="<?= $pedido_cliente->bairro; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Cidade</label>
                        <input readonly type="text" value="<?= $pedido_cliente->cidade; ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Estado</label>
                        <input readonly id="input_3_pedido" type="text" value="<?= $pedido_cliente->estado; ?>">
                    </div>
                </div>
                <div class="shape_pedido"></div>
                <div class="conatiner_cadastro_adm_pedido_body">
                    <div class="conatiner_cadastro_adm_pedido_body_left">
                        <div class="item_flex_pedido">
                            <label for="">Produto</label>
                            <input readonly type="text" value="<?= $pedido_cliente->nome_produto; ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Quant.</label>
                            <input id="input_3_pedido" readonly type="text" value="<?= $pedido_cliente->quantidade; ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Cor</label>
                            <input id="input_2_pedido" readonly type="text" value="<?= $pedido_cliente->cor; ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Preço Total</label>
                            <input id="input_2_pedido" readonly type="text" value="<?= $pedido_cliente->valor_total; ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Status Pedido</label>
                            <select name="status_pedido" id="">
                                <option <?= $pedido_cliente->status_pedido == 'A pagar' ? 'selected' : '' ?>>A pagar</option>
                                <option <?= $pedido_cliente->status_pedido == 'Produção' ? 'selected' : '' ?>>Produção</option>
                                <option <?= $pedido_cliente->status_pedido == 'Envio' ? 'selected' : '' ?>>Envio</option>
                                <option <?= $pedido_cliente->status_pedido == 'Entregue' ? 'selected' : '' ?>>Entregue</option>
                            </select>
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Código de Rastreio</label>
                            <input name="rastreio_pedido" type="text" value="<?= $pedido_cliente->rastreio ?>">
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
                <div  id="conatiner_btn_adm_pc" class="conatiner_btn_adm">
                    <button type="submit" name="salvarPedido" class="btn_salvar_adm">Salvar</button>
                </div>
            </form>
            
            
        
        </div>
    

    </main>


    <script src="adm_nav.js"></script>
    <script src="btn_listar_adm.js"></script>
</body>
</html>