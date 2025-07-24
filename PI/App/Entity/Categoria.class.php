<?php

require_once(__DIR__ . '/../DB/Database.php');

class Categoria
{
    public string $nome = '';
    public string $status_categoria;
    public string $imagem;

    // Construtor para inicializar a categoria - agora aceita argumento opcional
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->nome = $data['nome'] ?? '';
            $this->status_categoria = $data['status_categoria'] ?? '';
            $this->imagem = $data['imagem'] ?? '';
        }
    }

    public function cadastrarCategoria()
    {
        $db = new Database('categoria');
        $res = $db->insert(
            [
                'nome' => $this->nome,
                'status_categoria' => $this->status_categoria,
                'imagem' => $this->imagem
            ]
        );
        return $res;
    }

    public function atualizarCategoria($id_categoria)
    {
        $db = new Database('categoria');
        $res = $db->update('id_categoria = ' . $id_categoria, [
            'status_categoria' => $this->status_categoria,
            'nome' => $this->nome,
            'imagem' => $this->imagem,
        ]);

        return $res;
    }

    // Buscar categoria por ID
    public static function SelectCategoriaPorId($where = null, $order = null, $limit = null)
    {
        return (new Database('categoria'))->select('id_categoria = "' . $where . '"')->fetchObject(self::class);
    }

    // Buscar categorias com filtros
    public static function buscarCategoria($where = null, $order = null, $limit = null)
    {
        return (new Database('categoria'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // Buscar categorias com limite
    public static function buscarCategoriaLimit($where = null, $order = null, $limit = null)
    {
        return (new Database('categoria'))->select($where, $order, $limit)
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    // Método adicional: Buscar categoria por ID e retornar objeto Categoria
    public static function buscarCategoriaPorId(int $id_categoria): ?self
    {
        $db = new Database('categoria');
        $stmt = $db->getPDO()->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $stmt->execute([$id_categoria]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($data) {
            return new self($data);
        }
        return null;
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
}
?>
