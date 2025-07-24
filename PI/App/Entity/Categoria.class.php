<?php
namespace App\Entity;
require_once(__DIR__ . '/../DB/Database.php');

use App\DB\Database;

class Categoria
{
    public int $id_categoria;  // Added the id_categoria property
    public string $nome = '';  // Name of the category
    public string $status_categoria;  // Status of the category
    public string $imagem;  // Image associated with the category
    public string $nome_categoria;  // Explicitly declare the nome_categoria property

    // Construtor para inicializar a categoria - agora aceita argumento opcional
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->id_categoria = $data['id_categoria'] ?? 0;  // Ensure id_categoria is set
            $this->nome = $data['nome'] ?? '';
            $this->status_categoria = $data['status_categoria'] ?? '';
            $this->imagem = $data['imagem'] ?? '';
            $this->nome_categoria = $data['nome_categoria'] ?? '';  // Assign the dynamic property to the declared property
        }
    }

    // Cadastrar nova categoria
    public function cadastrarCategoria(): bool
    {
        $db = new Database('categoria');
        $res = $db->insert(
            [
                'nome' => $this->nome,
                'status_categoria' => $this->status_categoria,
                'imagem' => $this->imagem
            ]
        );
        return $res > 0;  // Return true if insertion was successful
    }

    // Atualizar categoria existente
    public function atualizarCategoria(): bool
    {
        $db = new Database('categoria');
        $res = $db->update(
            'id_categoria = :id_categoria', 
            [
                'status_categoria' => $this->status_categoria,
                'nome' => $this->nome,
                'imagem' => $this->imagem,
            ], 
            [':id_categoria' => $this->id_categoria]
        );
        return $res > 0;  // Return true if update was successful
    }

    // Buscar categoria por ID (fetches a single category)
    public static function SelectCategoriaPorId(int $id_categoria): ?self
    {
        $db = new Database('categoria');
        $result = $db->select('id_categoria = :id_categoria', [':id_categoria' => $id_categoria]);
        return $result ? new self($result[0]) : null;  // Return the first result or null
    }

    // Buscar categorias com filtros
    public static function buscarCategoria($where = null, $order = null, $limit = null): array
    {
        $db = new Database('categoria');
        return $db->select($where, $order, $limit)
                  ->fetchAll(\PDO::FETCH_CLASS, self::class) ?: [];
    }

    // Buscar categorias com limite
    public static function buscarCategoriaLimit($where = null, $order = null, $limit = null): array
    {
        return self::buscarCategoria($where, $order, $limit);
    }

    // Buscar categoria por ID e retornar objeto Categoria
    public static function buscarCategoriaPorId(int $id_categoria): ?self
    {
        $db = new Database('categoria');
        $stmt = $db->getPDO()->prepare("SELECT * FROM categoria WHERE id_categoria = :id_categoria");
        $stmt->execute([':id_categoria' => $id_categoria]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $data ? new self($data) : null;
    }

    // Getter para id_categoria
    public function getIdCategoria(): int
    {
        return $this->id_categoria;
    }

    // Getter para nome da categoria
    public function getNome(): string
    {
        return $this->nome;
    }

    // Getter para status da categoria
    public function getStatusCategoria(): string
    {
        return $this->status_categoria;
    }

    // Getter para imagem da categoria
    public function getImagem(): string
    {
        return $this->imagem;
    }

    // Getter for nome_categoria
    public function getNomeCategoria(): string
    {
        return $this->nome_categoria;
    }
}
?>
