<?php

require_once '../Entity/Produto.class.php';

$objProd = new Produto();

if(!isset($_GET['status']) || $_GET['status'] == ''){
    $dados = $objProd->buscarProduto();
}
else if(isset($_GET['status']) && $_GET['status'] == 'inativos'){

    $dados = $objProd->buscarProduto('status_produto = "i" ');

}
else if(isset($_GET['status']) && $_GET['status'] == 'ativos'){

    $dados = $objProd->buscarProduto('status_produto = "a" ');
}

if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}