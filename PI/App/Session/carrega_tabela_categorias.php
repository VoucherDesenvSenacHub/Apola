<?php

require_once '../Entity/Categoria.class.php';

$objProd = new Categoria();
if(!isset($_GET['status'])){
    $dados = $objProd->buscarCategoria();
}
else if(isset($_GET['status']) && $_GET['status'] == 'inativo'){

    $dados = $objProd->buscarCategoria('status_categoria = "i" ');

}
else if(isset($_GET['status']) && $_GET['status'] == 'ativo'){

    $dados = $objProd->buscarCategoria('status_categoria = "a" ');
}

if($dados){
    echo json_encode($dados);
}
else{
    $array = ['status' => 400, 'msg' => 'Ocorreu algum erro!!'];
    echo json_encode($array);
}