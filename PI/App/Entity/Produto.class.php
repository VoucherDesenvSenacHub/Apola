<?php
namespace App\Entity;

require_once(__DIR__ . '/../DB/Database.php');
require_once(__DIR__ . '/Categoria.class.php');

use App\DB\Database;
use PDO;

class Produto
{
    public int $id_produto;
    public string $nome;
    public float $preco;
    public ?float $preco_original = null;
    public ?float $avaliacao = null;
    public int $quantidade;
    public string $cor;
    public ?float $altura = null;
    public ?float $largura = null;
    public string $imagem;
    public string $descricao;
    public int $categoria_id_categoria;
    public string $status_produto;
    public string $tipo;
    private ?Category $categoria = null;

    // Construtor para inicializar o produto - agora aceita argumento opcional
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->id_produto = $data['id_produto'] ?? 0;
            $this->nome = $data['nome'] ?? '';
            $this->preco = isset($data['preco']) ? (float) $data['preco'] : 0.0;
            $this->preco_original = isset($data['preco_original']) ? (float) $data['preco_original'] : null;
            $this->avaliacao = isset($data['avaliacao']) && $data['avaliacao'] !== '' ? (float) $data['avaliacao'] : null;
            $this->quantidade = $data['quantidade'] ?? 0;
            $this->cor = $data['cor'] ?? '';
            $this->altura = isset($data['altura']) ? (float) $data['altura'] : null;
            $this->largura = isset($data['largura']) ? (float) $data['largura'] : null;
            $this->imagem = $data['imagem'] ?? '';
            $this->descricao = $data['descricao'] ?? '';
            $this->categoria_id_categoria = $data['categoria_id_categoria'] ?? 0;
            $this->status_produto = $data['status_produto'] ?? '';
            $this->tipo = $data['tipo'] ?? '';
        }
    }

    // Define a categoria do produto
    public function setCategory(Categoria $categoria): void
    {
        $this->categoria = $categoria;
    }

    // Métodos para acessar os dados do produto
    public function getIdProduto(): int { return $this->id_produto; }
    public function getNome(): string { return $this->nome; }
    public function getPreco(): float { return $this->preco; }
    public function getPrecoOriginal(): ?float { return $this->preco_original; }
    public function getAvaliacao(): ?float { return $this->avaliacao; }
    public function getQuantidade(): int { return $this->quantidade; }

    public function getCores(): array
    {
        return array_filter(array_map('trim', explode(',', $this->cor ?? '')));
    }

    public function getTamanhos(): array
    {
        return array_filter(array_map('trim', explode(',', $this->altura ?? '')));
    }

    public function getLargura(): ?float
    {
        return $this->largura;
    }

    public function getAltura(): ?float
    {
        return $this->altura;
    }

    public function getImagensUrls(): array
    {
        return array_filter(array_map('trim', explode(',', $this->imagem ?? '')));
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getCategoria(): ?Category
    {
        return $this->categoria;
    }

    public function getCategoriaId(): int
    {
        return $this->categoria_id_categoria;
    }

    public function getStatusProduto(): string
    {
        return $this->status_produto;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    // Métodos para operações no banco
    
    public function cadastrarProduto()
    {
        $db = new Database('produto');
        return $db->insert([
            'nome' => $this->nome,
            'preco' => $this->preco,
            'avaliacao' => $this->avaliacao,
            'quantidade' => $this->quantidade,
            'cor' => $this->cor,
            'largura' => $this->largura,
            'altura' => $this->altura,
            'imagem' => $this->imagem,
            'descricao' => $this->descricao,
            'tipo' => $this->tipo,
            'status_produto' => $this->status_produto,
            'categoria_id_categoria' => $this->categoria_id_categoria
        ]);
    }

    public function atualizarProduto(int $id_produto)
    {
        $db = new Database('produto');
        return $db->update('id_produto = ' . $id_produto, [
            'nome' => $this->nome,
            'preco' => $this->preco,
            'avaliacao' => $this->avaliacao,
            'quantidade' => $this->quantidade,
            'cor' => $this->cor,
            'largura' => $this->largura,
            'altura' => $this->altura,
            'imagem' => $this->imagem,
            'descricao' => $this->descricao,
            'tipo' => $this->tipo,
            'status_produto' => $this->status_produto,
            'categoria_id_categoria' => $this->categoria_id_categoria
        ]);
    }

    // Busca produto por ID, criando manualmente o objeto para evitar erros no construtor
    public static function buscarProdutoPorId(int $id_produto): ?self
    {
        $db = new Database('produto');
        $stmt = $db->getPDO()->prepare("SELECT * FROM produto WHERE id_produto = ?");
        $stmt->execute([$id_produto]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new self($data);
        }
        return null;
    }

    public static function buscarProduto($where = null, $order = null, $limit = null): array
    {
        return (new Database('produto'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function buscarProdutoPorCategoria($categoria)
    {
        return (new Database('produto'))->select_produto_por_categoria($categoria);
    }

    public static function buscarProdutoAleatorio()
    {
        return (new Database('produto'))->select_produto_por_aleatorio();
    }

    public static function buscarProdutosPorIds(array $ids): array
    {
        $ids = array_filter($ids, 'is_numeric');
        if (empty($ids)) return [];

        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $sql = "
            SELECT 
                p.id_produto,
                p.nome,
                p.preco,
                p.preco_original,
                p.avaliacao,
                p.quantidade,
                p.cor,
                p.altura,
                p.largura,
                p.imagem,
                p.descricao,
                p.categoria_id_categoria,
                p.status_produto,
                p.tipo
            FROM produto p
            WHERE p.id_produto IN ($placeholders)
        ";

        $stmt = (new Database('produto'))->getPDO()->prepare($sql);
        foreach ($ids as $i => $id) {
            $stmt->bindValue($i + 1, (int)$id, PDO::PARAM_INT);
        }

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $produtos = [];
        foreach ($result as $row) {
            $produtos[] = new self($row);
        }

        return $produtos;
    }
}
?>
