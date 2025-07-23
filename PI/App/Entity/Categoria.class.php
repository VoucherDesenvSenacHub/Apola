<?php
require_once(__DIR__ . '/../DB/Database.php');

use App\DB\Database;

class Categoria
{
    public string $nome = '';
    public string $status_categoria;
    public string $imagem;

    // Constructor to initialize the category
    public function __construct(array $data = [])
    {
        if ($data) {
            $this->nome = $data['nome'] ?? '';
            $this->status_categoria = $data['status_categoria'] ?? '';
            $this->imagem = $data['imagem'] ?? '';
        }
    }

    /**
     * Insert a new category into the database.
     *
     * @return bool True if the category was inserted, false otherwise.
     */
    public function cadastrarCategoria()
    {
        $db = new Database('categoria');
        return $db->insert(
            [
                'nome' => $this->nome,
                'status_categoria' => $this->status_categoria,
                'imagem' => $this->imagem
            ]
        );
    }

    /**
     * Update an existing category in the database.
     *
     * @param int $id_categoria The ID of the category to update.
     * @return bool True if the category was updated, false otherwise.
     */
    public function atualizarCategoria($id_categoria)
    {
        $db = new Database('categoria');
        return $db->update('id_categoria = ' . $id_categoria, [
            'status_categoria' => $this->status_categoria,
            'nome' => $this->nome,
            'imagem' => $this->imagem,
        ]);
    }

    /**
     * Fetch a category by its ID.
     *
     * @param int $where The category ID.
     * @return Categoria|null A Categoria object or null if not found.
     */
    public static function SelectCategoriaPorId($where = null)
    {
        return (new Database('categoria'))->select('id_categoria = "' . $where . '"')->fetchObject(self::class);
    }

    /**
     * Fetch all categories based on conditions.
     *
     * @param string|null $where SQL WHERE clause.
     * @param string|null $order SQL ORDER BY clause.
     * @param int|null $limit SQL LIMIT clause.
     * @return Categoria[] An array of Categoria objects.
     */
    public static function buscarCategoria($where = null, $order = null, $limit = null)
    {
        return (new Database('categoria'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Fetch categories with a limit.
     *
     * @param string|null $where SQL WHERE clause.
     * @param string|null $order SQL ORDER BY clause.
     * @param int|null $limit SQL LIMIT clause.
     * @return Categoria[] An array of Categoria objects.
     */
    public static function buscarCategoriaLimit($where = null, $order = null, $limit = null)
    {
        return (new Database('categoria'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * Convert the Categoria to a Category entity.
     *
     * @return Category
     */
    public function toCategory(): Category
    {
        return new Category([
            'id_categoria' => $this->id_categoria ?? 0,
            'nome_categoria' => $this->nome ?? '',
        ]);
    }
}

