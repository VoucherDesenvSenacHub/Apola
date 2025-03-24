<?php


require(__DIR__ . '/../DB/Database.php');




class Cliente{


    public int $id_cliente;
    public string $nome;
    public string $sobrenome;
    public  int $cep;
    public int $cpf;
    public string $email;
    public string $senha;
    public ?string $telefone;
    public ?int $num_casa;
    public ?string $rua;
    public ?string $bairro;
    public ?string $estado;
    public ?string $cidade;
    public ?string $complemento;



    // Função que cadastra usúario no banco de dados 
    
    public function cadastrarCliente(){
        $db = new Database('cliente');

        $result = $db->insert(
            [
                'nome'=> $this->nome,
                'sobrenome'=> $this->sobrenome,
                'cep' => $this->cep,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'senha' => $this->senha,
            ]
            );

        
        return $result;
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

