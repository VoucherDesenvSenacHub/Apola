<?php

require_once '../Entity/Pedido.class.php';

$objPedido = new Pedido();
$dados = $objPedido->buscar();

if ($dados) {
    echo json_encode($dados);
} else {
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}
?>
