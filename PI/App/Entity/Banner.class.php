<?php
require_once(__DIR__ . '/../DB/Database.php');


class Banner{
    public string $caminho;


    public function cadastrarBanner(){
        $db = new Database('banner');

        // print_r($this->caminho);
        $result = $db->insert(
            [
                'caminho' =>$this->caminho
            ]
            );

            if($result){
                return true;
            }
    }

}