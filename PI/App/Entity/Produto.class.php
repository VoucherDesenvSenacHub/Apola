<?php
require_once(__DIR__ . '/../DB/Database.php');


class Produto{
    public string $nome;
    public float $preco;
    public string $avaliacao;
    public int $quantidade;
    public string $cor;
    public int $tamanho;
    public string $imagem;
    public string $descricao;
    public string $tipo
}