<?php
// Entity/Favorito.php

class Favorito {
    public $id;
    public $id_cliente;
    public $id_produto;

    public function __construct($id, $id_cliente, $id_produto) {
        $this->id = $id;
        $this->id_cliente = $id_cliente;
        $this->id_produto = $id_produto;
    }
}
?>
