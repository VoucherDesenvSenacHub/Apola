<?php


require_once(__DIR__ . '/../DB/Database.php');

class Categoria{
    public string $nome;
    public string $status_categoria;
    public string $imagem;

    public function cadastrarCategoria(){
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

    public function mudarStatus($id_categoria, $status_categoria){
        $db = new Database('categoria');
        $res = $db->updade('id_categoria = '.$this->id_categoria,[
            'status_categoria' => $this->categoria,
        ]);
    }

    public static function SelectCategoriaPorId($where=null, $order =null, $limit = null){

        return (new Database('categoria'))->select('id_categoria = "'. $where .'"')->fetchObject(self::class);

    }

    public static function buscarCategoria($where=null, $order =null, $limit = null){
        return (new Database('categoria'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);

    }

    
}