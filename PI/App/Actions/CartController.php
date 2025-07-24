<?php

namespace App\Actions;

require_once __DIR__ . '/../Entity/Produto.class.php';

use App\Entity\Produto;

class CartController
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * Constructor apenas recebe o PDO.
     *
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Exibe o carrinho com itens detalhados.
     *
     * @return array
     */
    public function showCart(): array
    {
        $cartSession = $_SESSION['cart'] ?? [];
        
        if (empty($cartSession)) {
            return [
                'cartItems' => [],
                'subtotal' => 0,
                'shipping' => 22.69,
                'total' => 22.69
            ];
        }

        $cartItems = [];
        $subtotal = 0;
        
        foreach ($cartSession as $productId => $item) {
            if (!isset($item['quantidade']) || $item['quantidade'] <= 0) {
                continue;
            }

            $qty = (int)$item['quantidade'];
            $unitPrice = (float)($item['preco'] ?? 0);
            $lineTotal = $unitPrice * $qty;
            $subtotal += $lineTotal;

            $image = is_array($item['imagem']) ? ($item['imagem'][0] ?? '') : ($item['imagem'] ?? '');
            $color = is_array($item['cor']) ? implode(', ', $item['cor']) : ($item['cor'] ?? '');
            $size = '';
            if (!empty($item['altura']) && is_array($item['altura'])) {
                $size = implode(', ', array_filter($item['altura']));
            } elseif (!empty($item['altura'])) {
                $size = $item['altura'];
            }

            $cartItems[] = [
                'id_produto' => (int)$productId,
                'nome' => $item['nome'] ?? 'Produto sem nome',
                'imagem' => $image,
                'cor' => $color,
                'tamanho' => $size,
                'preco' => $unitPrice,
                'quantidade' => $qty,
                'line_total' => $lineTotal
            ];
        }

        $shipping = 22.69;
        $total = $subtotal + $shipping;

        return [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total
        ];
    }

    /**
     * Adiciona um produto ao carrinho.
     *
     * @param int $productId
     * @param int $qty
     * @return void
     */
    public function addToCart(int $productId, int $qty = 1): void
    {
        if ($qty <= 0) {
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => 'Quantidade inválida',
                'cartCount' => array_sum(array_column($_SESSION['cart'] ?? [], 'quantidade'))
            ]);
            exit;
        }

        // Buscar produto no banco
        $stmt = $this->pdo->prepare("SELECT * FROM produto WHERE id_produto = :id");
        $stmt->bindParam(':id', $productId, \PDO::PARAM_INT);
        $stmt->execute();
        $productData = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$productData) {
            http_response_code(404);
            echo json_encode([
                'status' => 'error',
                'message' => 'Produto não encontrado',
                'cartCount' => array_sum(array_column($_SESSION['cart'] ?? [], 'quantidade'))
            ]);
            exit;
        }

        $product = new Produto($productData);

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantidade'] += $qty;
        } else {
            $_SESSION['cart'][$productId] = [
                'id' => $productId,
                'nome' => $product->getNome(),
                'preco' => $product->getPreco(),
                'imagem' => $product->getImagensUrls()[0] ?? '',
                'cor' => implode(', ', $product->getCores()),
                'altura' => implode(', ', $product->getTamanhos()),
                'quantidade' => $qty
            ];
        }

        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'cartCount' => array_sum(array_column($_SESSION['cart'], 'quantidade'))
        ]);
        exit;
    }

    /**
     * Atualiza quantidade de um item no carrinho.
     *
     * @param int $productId
     * @param int $qty
     * @return void
     */
    public function updateQuantity(int $productId, int $qty): void
    {
        if (!isset($_SESSION['cart'][$productId])) {
            http_response_code(404);
            echo json_encode(['status' => 'error', 'message' => 'Produto não encontrado']);
            exit;
        }

        if ($qty <= 0) {
            $this->removeFromCart($productId);
            return;
        }

        $_SESSION['cart'][$productId]['quantidade'] = $qty;
        session_write_close();

        $cartData = $this->showCart();

        echo json_encode([
            'status' => 'success',
            'cartItems' => $cartData['cartItems'],
            'subtotal' => $cartData['subtotal'],
            'shipping' => $cartData['shipping'],
            'total' => $cartData['total'],
            'cartCount' => array_sum(array_column($_SESSION['cart'], 'quantidade'))
        ]);
        exit;
    }

    /**
     * Remove produto do carrinho.
     *
     * @param int $productId
     * @return void
     */
    public function removeFromCart(int $productId): void
    {
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
            session_write_close();
        }

        $cartData = $this->showCart();

        echo json_encode([
            'status' => 'success',
            'cartItems' => $cartData['cartItems'],
            'subtotal' => $cartData['subtotal'],
            'shipping' => $cartData['shipping'],
            'total' => $cartData['total'],
            'cartCount' => array_sum(array_column($_SESSION['cart'] ?? [], 'quantidade'))
        ]);
        exit;
    }
}
