<?php

include "head_adm.php";
// include "nav_bar_adm.php";

include_once "../../App/DB/Database.php";

$idPedido = $_GET['id'] ?? null;
if (!$idPedido) {
    die("ID do pedido não informado.");
}

$conection = new Database(); 

$sql = "SELECT produto.nome AS nome_produto, produto.quantidade AS quantidade, produto.cor AS cor, produto.imagem AS imagem,
        sacola.valor_total AS valor_total, pedido.codigo_rastreio AS rastreio, pedido.status_pedido AS status_pedido,
        cliente.telefone AS contato, cliente.cep AS cep, cliente.rua AS rua, cliente.numero_casa AS numero, cliente.bairro AS bairro,
        cliente.cidade AS cidade, cliente.estado AS estado, usuario.nome AS nome_cliente, cliente.sobrenome AS sobrenome
        FROM produto 
        JOIN sacola ON produto.id_produto = sacola.produto_id_produto 
        JOIN pedido ON sacola.produto_id_produto = pedido.sacola_produto_id_produto 
        JOIN cliente ON pedido.sacola_cliente_id_cliente = cliente.id_cliente 
        JOIN usuario ON cliente.id_usuario = usuario.id_usuario
        WHERE pedido.id_pedido = :id";

$stmt = $conection->execute($sql, [':id' => $idPedido]);


$pedido = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$pedido) {
    die("Pedido não encontrado.");
}

?>


<header class="header_adm" >
            <nav class="navbar_adm" id="sidebar_adm">
                <div id="sidebar_adm_content">
                    <div class="logo_sidebar">
                        <img  id="logo_adm" src="../../src/imagens/image.png" alt="">
                    </div>
                    <ul id="side_bar_itens">
                        <li class="side_bar-itens ">
                            <a style="text-decoration:none; " href="dashbord_adm.php">
                                <i class="fa-solid fa-chart-simple"></i>
                                <span class="text_side_item">Dashbord</span>
                            </a>
                        </li>
                        <li class="side_bar-itens active">
                            <a style="text-decoration:none; " href="listar_pedidos_adm.php">
                                <i class="fa-solid fa-truck"></i>
                                <span class="text_side_item">Pedidos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a style="text-decoration:none; " href="listar_produtos_adm.php">
                                <i class="fa-solid fa-box"></i>
                                <span class="text_side_item">Produtos</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a href="listar_categoria_adm.php">
                                <i class="fa-solid fa-boxes-stacked"></i>
                                <span class="text_side_item">Categorias</span>
                            </a>
                        </li>
                        <li class="side_bar-itens">
                            <a href="cadastrar_banner_adm.php">
                                <i class="fa-solid fa-bookmark"></i>
                                <span class="text_side_item">Banners</span>
                            </a>
                        </li>
                    </ul>
            
                    <button id="open_btn_adm">
                        <i id="open_btn_icon_adm" class="fa-solid fa-chevron-right"></i>
                    </button>
        
                </div>
        
                <div id="logout_adm">
                    <button class="side_bar-itens btn_logout_adm">
                        <a href="../user">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span class="text_side_item">Sair</span>
                        </a>
                    </button>
                </div>
                
        
            </nav>
            <nav class="nav_mobile_adm">
                <div class="nav_bar_content_mobile_adm">
                    <ul>
                        <li>
                            <a href="dashbord_adm.php"><i class="fa-solid fa-chart-simple"></i></a>
                        </li>
                        <li>
                            <a class="active_mob"  href="listar_pedidos_adm.php"><i class="fa-solid fa-truck"></i></a>
                        </li>
                        <li>
                            <a href="listar_produtos_adm.php"><i class="fa-solid fa-box"></i></a>
                        </li>
                        <li>
                            <a href="listar_categoria_adm.php"><i class="fa-solid fa-boxes-stacked"></i></a>
                        </li>
                        <li>
                            <a href="cadastrar_banner_adm.php"><i class="fa-solid fa-bookmark"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa-solid fa-right-to-bracket"></i></a>
                        </li>
                    </ul>    
                </div>
            </nav>

</header>
    
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
                        <input readonly type="text" value="<?= $pedido['nome_cliente'] . ' ' . $pedido['sobrenome'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Contato</label>
                        <input readonly id="input_2_pedido" type="text" value="<?= $pedido['contato'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">CEP</label>
                        <input readonly id="input_2_pedido"  type="text" value="<?= $pedido['cep'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Rua</label>
                        <input readonly type="text" value="<?= $pedido['rua'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">N°</label>
                        <input readonly id="input_3_pedido" type="text" value="<?= $pedido['numero'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Bairro</label>
                        <input readonly type="text" value="<?= $pedido['bairro'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Cidade</label>
                        <input readonly type="text" value="<?= $pedido['cidade'] ?>">
                    </div>
                    <div class="item_flex_pedido">
                        <label for="">Estado</label>
                        <input readonly id="input_3_pedido" type="text" value="<?= $pedido['estado'] ?>">
                    </div>
                </div>
                <div class="shape_pedido"></div>
                <div class="conatiner_cadastro_adm_pedido_body">
                    <div class="conatiner_cadastro_adm_pedido_body_left">
                        <div class="item_flex_pedido">
                            <label for="">Produto</label>
                            <input readonly type="text" value="<?= $pedido['nome_produto'] ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Quant.</label>
                            <input id="input_3_pedido" readonly type="text" value="<?= $pedido['quantidade'] ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Cor</label>
                            <input id="input_2_pedido" readonly type="text" value="<?= $pedido['cor'] ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Preço Total</label>
                            <input id="input_2_pedido" readonly type="text" value="<?= $pedido['valor_total'] ?>">
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Status Pedido</label>
                            <select name="" id="">
                                <option <?= $pedido['status_pedido'] == 'A pagar' ? 'selected' : '' ?>>A pagar</option>
                                <option <?= $pedido['status_pedido'] == 'Produção' ? 'selected' : '' ?>>Produção</option>
                                <option <?= $pedido['status_pedido'] == 'Envio' ? 'selected' : '' ?>>Envio</option>
                                <option <?= $pedido['status_pedido'] == 'Entregue' ? 'selected' : '' ?>>Entregue</option>
                            </select>
                        </div>
                        <div class="item_flex_pedido">
                            <label for="">Código de Rastreio</label>
                            <input type="text" value="<?= $pedido['rastreio'] ?>">
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