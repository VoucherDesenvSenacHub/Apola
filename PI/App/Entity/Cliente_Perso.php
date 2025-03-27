<?php

require_once(__DIR__ . '/../DB/Database.php');

require_once '../../Pages/user/produto_personalizado.php';


class Perso {
    public int $id;
    public string $tipo;
    public string $descricao;
    public string $imagem;
    public int $id_produto_perso; // Corrigido para 'int'
    public array $imagens = [];


    public function CadastrarProdPerso() {
        $db = new Database('produto_perso');
    
        // Insere o produto personalizado
        $result = $db->insert(
            [
                'tipo' => $this->tipo,
                'descricao' => $this->descricao,
            ]
        );
    
        // Pega o id do produto personalizado inserido
        $this->id_produto_perso = $result;  // Supondo que o $result retorne o id do novo produto
    
        return $result;
    }

    public function CadastrarImagensProduto() {
        // Cria a conexão com o banco de dados
        $db = new Database('imagens_produto_perso');
    
        // Prepara os valores para cada imagem
        $imagens = [
            'imagem1' => $this->imagens[0] ?? null,
            'imagem2' => $this->imagens[1] ?? null,
            'imagem3' => $this->imagens[2] ?? null,
            'imagem4' => $this->imagens[3] ?? null,
        ];
    
        // Insere as imagens na tabela imagens_produto_perso
        $result = $db->insert(array_merge($imagens, ['id_produto_perso' => $this->id_produto_perso]));
    
        return $result;
    }
}

