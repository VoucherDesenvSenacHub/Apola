<?php

header('Content-Type: application/json');


require '../../App/config.inc.php';
require '../../App/Session/Login.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);


if (!isset($data['ids']) || !is_array($data['ids'])) {
    echo json_encode(['erro' => 'IDs inválidos']);
    exit;
}

$ids = array_map('intval', $data['ids']);


$produtos = Produto::buscarProdutoCart($ids);




echo json_encode($produtos);


// $pdo = new PDO("mysql:host=localhost;dbname=seu_banco", "usuario", "senha");

// $placeholders = implode(',', array_fill(0, count($ids), '?'));
// $sql = "SELECT id, nome, preco, imagem, cor, tamanho, desconto FROM produtos WHERE id IN ($placeholders)";

// $stmt = $pdo->prepare($sql);
// $stmt->execute($ids);
// $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($produtos);
