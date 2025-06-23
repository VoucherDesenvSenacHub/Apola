<?php
require_once '../../App/DB/Database.php';

class Pedido {

    public function cadastrar(){
        $db = new Database('pedido');
        $result = $db->insert([
        ]);

        return $result ? true : false;
    }

    public function atualizar($id_pedido){
        return (new Database('pedido'))->update('id_pedido = ' .$id_pedido  ,[
            $status_pedido =
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