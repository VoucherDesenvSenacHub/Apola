<?php

require_once '../Entity/Avaliacao.class.php';

header("Access-Control-Allow-Origin: *");
header('Cache-Control: no-cache, must-revalidate'); 
header("Content-Type: text/plain; charset=UTF-8");
header("HTTP/1.1 200 OK");

$dados = file_get_contents("php://input");

if(isset($_POST)){

    $newDados = json_decode($dados);
    var_dump($newDados->notas);
    $avaliacao = new Avaliacao();
    $avaliacao->notas = $newDados->notas;
    $avaliacao->comentario = $newDados->comentario;
    $avaliacao->id_cliente = $newDados->id_cliente;
    $avaliacao->cadastrarAvaliacao();
    

}