<?php


class Database{

    public $conection;
    public string $local = '10.38.0.125';
    public string $db = 'pi_artesanato';
    public string $user = 'devweb';
    public string $password = 'suporte@22';
    public $table;



    public function __construct($table = null) {
        $this->table = $table;
        $this->conecta();
    }

    
    // Função conectar com o banco de dados

    private function conecta(){
        try{
            $this->conection = new PDO("mysql:host=".$this->local.";dbname=$this->db",
            $this->user,$this->password); 
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return true;
        }catch (PDOException $err){
            die("Connection Failed" . $err->getMessage());
            return false;
        }
    }

    // Função para excutar uma função do banco de dados

    public function execute($query,$binds = []){
        //BINDS = parametros
        try{
            $stmt = $this->conection->prepare($query);
            $stmt->execute($binds);
            return $stmt;
        }catch (PDOException $err) {
            //retirar msg em produção
            die("Connection Failed " . $err->getMessage());

        }

    }

    // Função para inserir algo dados no banco de dados

    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO ' . $this->table .'  (' .implode(',',$fields). ') VALUES (' .implode(',',$binds).')';


        // echo $query ;
        // print_r( array_values($values));
        // die();


        $this->execute($query,array_values($values));

        return $this->conection->lastInsertId();
        
    }


    // Função para listar dados do banco de dados
    
    public function select($where=null, $order=null, $limit=null, $fields = '*'){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        // COM FIELDS NA FUNÇÃO SELECT COMO PARAMENTRO = "$fields = '*'
        $query = 'SELECT '.$fields.' FROM '. $this->table.' '.$where.' '.$order.' '.$limit;
        // $query = 'SELECT * FROM '. $this->table.' '.$where.' '.$order.' '.$limit.;

        return $this->execute($query);
        
    }



    // Função para deletar dados do banco de dados

    public function delete($where){
        $query = 'DELETE FROM'.this->table.'WHERE'.$where;

        $this->execute($query);

        return true;



    }



    // Função para editar a dados do banco de dados

    public function update($where, $values){
        $fields = array_keys($values);

        $query = 'UPDATE'.$this->table.'SET'.implode('=?,',$fields).'=? WHERE '.$where;

        $this->execute($query,array_values($values));
        return  true;

    }








}


?>