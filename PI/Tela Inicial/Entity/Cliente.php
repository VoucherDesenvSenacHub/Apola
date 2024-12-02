<?php


require '../DB/Database.php';


class Cliente{


    public int $id_cliente;
    public string $nome;
    public  string $cep;
    public int $cpf;
    public string $email;
    public string $senha;
    public int $telefone;
    public int $num_casa;
    public string $rua;
    public string $bairro;
    public string $estado;
    public string $cidade;
    public string$complemento;




    public function __construct(string $nome, string $email, int $cpf,string $cep, string $senha ) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->cep = $cep;
        $this->senha = $senha;
    }


    public function cadastrarCliente(){
        $db = new Database('cliente');

        $result = $db->insertCliente(
            [
                'nome'=> $this->nome,
                'cep' => $this->cep,
                'cpf' => $this->cpf,
                'email' => $this->email,
                'senha' => $this->senha,
            ]
            );

            if($result){
                return true;

            }else{
                return false;
            }

    }





}