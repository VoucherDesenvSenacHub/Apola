<?php


require_once(__DIR__ . '/../DB/Database.php');

require_once 'User.php';

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

    
}