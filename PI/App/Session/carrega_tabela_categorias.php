<?php

require_once '../Entity/Categoria.class.php';

$objProd = new Categoria();

$dados = $objProd->buscarCategoria();

if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}