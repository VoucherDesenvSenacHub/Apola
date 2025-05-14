<?php
class Pedido {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listar() {
        $query = "
            SELECT 
                p.id_pedido AS numero,
                s.valor_total AS total,
                p.tipo AS tipo,
                c.estado AS estado
            FROM pedido p
            JOIN sacola s ON p.sacola_id_sacola = s.id_sacola
            JOIN cliente c ON s.cliente_id_cliente = c.id_cliente
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
