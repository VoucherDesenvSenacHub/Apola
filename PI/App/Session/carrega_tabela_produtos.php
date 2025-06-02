<?php

require_once '../Entity/Produto.class.php';

$objProd = new Produto();

$dados = $objProd->buscarProduto();

if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}