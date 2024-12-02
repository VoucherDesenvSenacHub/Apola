<?php


class Database{

    public $conn;
    public string $local = '10.38.0.122';
    public string $db = 'pi_artesanato';
    public string $user = 'devweb';
    public string $password = 'suporte@22';
    public $table;



    public function __construct($table = null) {
        $this->table = $table;
        $this->conecta();
    }


    private function conecta(){
        try{
            $this->conn = new PDO("mysql:host=".$this->local.";dbname=$this->db",
            $this->user,$this->password); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return true;
        }catch (PDOException $err){
            die("Connection Failed" . $err->getMesssage());
            return false;
        }
    }

    public function execute($query,$binds = []){
        //BINDS = parametros
        try{
            $stmt = $this->conn->prepare($query);
            $stmt->execute($binds);
            return $stmt;

        }catch (PDOException $err) {
            //retirar msg em produção


            die("Connection Failed " . $err->getMessage());

        }

    }


    public function insertCliente($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO ' . $this->table .'  (' .implode(',',$fields). ') VALUES (' .implode(',',$binds).')';


        // echo $query ;
        // print_r( array_values($values));
        // die();


        $this->execute($query,array_values($values));
        
    }





}


?>