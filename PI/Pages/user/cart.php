<?php
// PI/Pages/user/cart.php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../../App/Core/Config.php';
require_once __DIR__ . '/../../App/DB/Database.php';
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../App/Actions/CartController.php';

use App\Actions\CartController;
use App\Core\Config;

header('Content-Type: application/json');

try {
    // Initialize configuration
    Config::initialize();
    
    // Database connection
    $db = new \App\DB\Database();
    $pdo = $db->pdo;
    
    // Initialize cart controller
    $cartController = new CartController($pdo);

    // Get and validate input
    $action = $_POST['action'] ?? '';
    $productId = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $qty = filter_input(INPUT_POST, 'qty', FILTER_VALIDATE_INT, [
        'options' => [
            'default' => 1,
            'min_range' => 1
        ]
    ]);

    // Validate product ID
    if (!$productId || $productId <= 0) {
        throw new InvalidArgumentException('ID de produto inválido');
    }

    // Try to add to cart
    $cartController->addToCart($productId, $qty);

    echo json_encode([
        'status' => 'success',
        'message' => 'Produto adicionado ao carrinho',
        'cartCount' => array_sum(array_column($_SESSION['cart'] ?? [], 'quantidade'))
    ]);
    exit;

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
    exit;
}
