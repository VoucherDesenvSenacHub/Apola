<?php
require_once '../DB/Database.php';


class Banner{
    public srting $caminho;


    public function cadastrarBanner(){
        $db = new Database('banner');
        $result = $db->insert(
            [
                'caminho' => $this->caminho,
            ]
            );
    }
}