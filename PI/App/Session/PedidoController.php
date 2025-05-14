<?php
require_once '../DB/Database.php';
require_once '../Entity/Pedido.php';

$database = new Database();
$db = $database->connect();

$pedido = new Pedido($db);
$pedidos = $pedido->listar();

include '../../Pages/adm/listar_pedidos_adm.php';