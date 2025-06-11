<?php

require_once '../Entity/Categoria.class.php';

$objProd = new Categoria();
if(!isset($_GET['status']) || $_GET['status'] == '' || $_GET['status'] == 'todos'){
    $dados = $objProd->buscarCategoria();
}
else if(isset($_GET['status']) && $_GET['status'] == 'inativos'){

    $dados = $objProd->buscarCategoria('status_categoria = "i" ');

}
else if(isset($_GET['status']) && $_GET['status'] == 'ativos'){

    $dados = $objProd->buscarCategoria('status_categoria = "a" ');
}

if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}