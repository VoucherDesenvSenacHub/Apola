<?php


require(__DIR__ . '/../DB/Database.php');




class Adm{


    public int $id_adm;
    public string $email;
    public string $senha;






    public function cadastrarAdm(){
        $db = new Database('administrador');

        $result = $db->insert(
            [
                'email' => $this->email,
                'senha' => $this->senha,
            ]
            );

        
        return $result;
    }



    public static function getAdmPorEmail($where=null, $order =null, $limit = null){

        return (new Database('administrador'))->select('email = "'. $where .'"')->fetchObject(self::class);

    }



}