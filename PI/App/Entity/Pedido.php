<?php
require_once '../../App/DB/Database.php';

class Pedido {
    public int $id_pedido;

    public function cadastrar(){
        $db = new Database('pedido');
        $result = $db->insert([
            'data_pedido' => $this->data_pedido,
        ]);

        return $result ? true : false;
    }

    public function atualizar(){
        return (new Database('pedido'))->update('sacola_id_sacola = '.$this->sacola_id_sacola,[
            'data_pedido' => $this->data_pedido,
        ]);
    }

    public static function buscar(){
        return (new Database('pedido'))->select_pedido();
        //return (new Database('pedido'))->select_pedido()->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar_by_id($id){
        return (new Database('pedido'))->select_by_id($id)->fetchObject(self::class);
    }

    public function excluir($sacola_id){
        return (new Database('pedido'))->delete('sacola_id_sacola = '.$sacola_id);
    }
}
?>