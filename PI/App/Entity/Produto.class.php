<?php
namespace App\Entity;

require_once(__DIR__ . '/../DB/Database.php');
use App\DB\Database;

class Produto
{
    // Declare all properties to avoid dynamic property deprecation
    public int $id_produto;
    public string $nome;
    public float $preco;
    public ?string $avaliacao = null;
    public int $quantidade;
    public string $cor;
    public float $largura;
    public float $altura;
    public string $imagem;
    public string $descricao;
    public string $tipo;
    public string $status_produto;
    public int $categoria_id_categoria;

    // Constructor to initialize properties (Optional argument for default values)
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->id_produto = $data['id_produto'] ?? 0;
            $this->nome = $data['nome'] ?? '';
            $this->preco = $data['preco'] ?? 0.0;
            $this->avaliacao = $data['avaliacao'] ?? null;
            $this->quantidade = $data['quantidade'] ?? 0;
            $this->cor = $data['cor'] ?? '';
            $this->largura = $data['largura'] ?? 0.0;
            $this->altura = $data['altura'] ?? 0.0;
            $this->imagem = $data['imagem'] ?? '';
            $this->descricao = $data['descricao'] ?? '';
            $this->tipo = $data['tipo'] ?? '';
            $this->status_produto = $data['status_produto'] ?? '';
            $this->categoria_id_categoria = $data['categoria_id_categoria'] ?? 0;
        }
    }

    // Cadastrar novo produto
    public function cadastrarProduto()
    {
        $db = new Database('produto');
        $result = $db->insert(
            [
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
            ]
        );
        return $result;
    }

    // Atualizar produto existente
    public function atualizarProduto($id_produto)
    {
        $db = new Database('produto');
        $res = $db->update('id_produto = ' . $id_produto, [
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
        return $res;
    }

    // Buscar produto por ID
    public static function buscarProdutoPorId($where = null, $order = null, $limit = null)
    {
        return (new Database('produto'))->select('id_produto = "' . $where . '"')->fetchObject(self::class);
    }

    // Buscar produtos com filtros
    public static function buscarProduto($where = null, $order = null, $limit = null)
    {
        return (new Database('produto'))->select($where, $order, $limit)
                                        ->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    // Buscar produtos por categoria
    public static function buscarProdutoCategoria($categoria)
    {
        return (new Database('produto'))->select_produto_por_categoria($categoria);
    }

    // Buscar produto aleatório
    public static function buscarProdutoAleatorio()
    {
        return (new Database('produto'))->select_produto_por_aleatorio();
    }

    // Getter for Categoria (if you need it)
    public function getCategoria(): ?Categoria
    {
        return Categoria::buscarCategoriaPorId($this->categoria_id_categoria);
    }

    // Add this method to the Produto class
    public function getNome(): string
    {
        return $this->nome;
    }

}
?>
