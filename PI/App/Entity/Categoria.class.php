<?php
namespace App\Entity;

require_once(__DIR__ . '/../DB/Database.php');

use App\DB\Database;
use PDO;

class Categoria
{
    public int $id_categoria;
    public string $nome_categoria;
    public string $status_categoria;
    public string $imagem;

    public function __construct(array $data = [])
    {
        $this->id_categoria   = isset($data['id_categoria']) ? (int) $data['id_categoria'] : 0;
        $this->nome_categoria = $data['nome_categoria']      ?? '';
        $this->status_categoria = $data['status_categoria']  ?? '';
        $this->imagem         = $data['imagem']              ?? '';
    }

    // Getters
    public function getIdCategoria(): int
    {
        return $this->id_categoria;
    }

    public function getNomeCategoria(): string
    {
        return $this->nome_categoria;
    }

    public function getStatusCategoria(): string
    {
        return $this->status_categoria;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    // Inserts a new category
    public function cadastrarCategoria(): bool
    {
        $db = new Database('categoria');
        return $db->insert([
            'nome_categoria'    => $this->nome_categoria,
            'status_categoria'  => $this->status_categoria,
            'imagem'            => $this->imagem
        ]);
    }

    // Updates an existing category
    public function atualizarCategoria(int $id): bool
    {
        $db = new Database('categoria');
        return $db->update('id_categoria = ' . $id, [
            'nome_categoria'    => $this->nome_categoria,
            'status_categoria'  => $this->status_categoria,
            'imagem'            => $this->imagem
        ]);
    }

    // Fetch a category by ID
    public static function buscarPorId(int $id): ?self
    {
        $db = new Database('categoria');
        $stmt = $db->getPDO()->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new self($data) : null;
    }

    // Fetch all categories
    public static function buscarTodas(?string $where = null, ?string $order = null, ?int $limit = null): array
    {
        return (new Database('categoria'))
            ->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // Convert to generic Category object if needed
    public function toCategory(): Category
    {
        return new Category([
            'id_categoria'   => $this->id_categoria,
            'nome_categoria' => $this->nome_categoria,
        ]);
    }
}
