<?php

require '../Entity/Pedido.class.php';

$objProd = new Pedido();

$dados = $objProd->buscar();
if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}