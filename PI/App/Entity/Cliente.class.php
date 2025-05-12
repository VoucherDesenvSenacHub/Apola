<?php


require_once(__DIR__ . '/../DB/Database.php');

require_once 'User.php';




class Cliente extends User{


    public int $id_cliente;
    public string $sobrenome;
    public int $cep;
    public int $cpf;
    public ?string $telefone;
    public ?int $numero_casa;
    public ?string $rua;
    public ?string $bairro;
    public ?string $estado;
    public ?string $cidade;
    public ?string $complemento;
    public int $id_usuario;


    //atributo tipo perfil
    // enum cliente e adm.

    
    



    // Função que cadastra usúario no banco de dados 
    
    public function cadastrarCliente(){


        $db = new Database('usuario');
        $res_id = $db->insert_LastId(
            [
                'nome' => $this->nome,
                'email' => $this->email,
                'senha' => $this->senha,
                'id_perfil' => $this->id_perfil
            ]
        );
        $db = new Database('cliente');
        $res = $db->insert(
            [
                'sobrenome' => $this->sobrenome,
                'cep' => $this->cep,
                'cpf' => $this->cpf,
                'id_usuario' => $res_id
            ]
            );

        
        return $res;
    }


    
    // Função que lista dados da table de clientes do banco de dados

    public static function getCliente($where=null, $order =null, $limit = null){
        return (new Database('cliente'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);

    }

    // Função que retorna uma instâcia de usuario com base no email

    public static function getUsuarioPorEmail($where=null, $order =null, $limit = null){

        return (new Database('cliente'))->select('email = "'. $where .'"')->fetchObject(self::class);

    }


    // QUANDO EU QUERO RETORNAR UM OBJETO "CLASSE" PARA INSTANCIAR 
    // public static function getUsuarioPorEmail($where=null, $order =null, $limit = null){

    //     return (new Database('cliente'))->select('email = "'. $where .'"')->fetchObject(self::class);

    // }



    public function atualizarCliente(){
        return (new Database('cliente'))->update('id = '.$this->id_cliente,[
                                            'nome'=> $this->nome,
                                            'cep' => $this->cep,
                                            'cpf' => $this->cpf,
                                            'email' => $this->email,
                                            'senha' => $this->senha,
        ]);
        
    }






}

