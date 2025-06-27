<?php

require_once '../Entity/Pedido.class.php';

$objPedido = new Pedido();

$where = '';

if (isset($_GET['search']) && trim($_GET['search']) !== '') {
    $search = addslashes(trim($_GET['search']));
    if (is_numeric($search)) {
        $where = "pedido.id_pedido = $search";
    } else {
        $where = "pedido.tipo LIKE '%$search%' OR cliente.estado LIKE '%$search%'";
    }
}

$dados = $objPedido->buscar($where);

echo json_encode($dados ? $dados : []);

?>
