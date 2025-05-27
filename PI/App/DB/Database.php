<?php


clASs Database{

    // public $conection;
    // public string $local = '10.38.0.125';
    // public string $db = 'pi_artesanato';
    // public string $user = 'devweb';
    // public string $password = 'suporte@22';
    // public $table;
    
    public $conection;
    public string $local = '192.168.22.9';
    public string $db = '140p1';
    public string $user = 'devweb';
    public string $password = 'voucher140';
    public $table;



    public function __construct($table = null) {
        $this->local = $_ENV['DB_HOST'] ?? 'localhost';
        $this->db = $_ENV['DB_DATABASE'] ?? 'Users';
        $this->user = $_ENV['DB_USERNAME'] ?? 'root';
        $this->password = $_ENV['DB_PASSWORD'] ?? '';
        $this->table = $table;
        $this->conecta();
    }

        
    // Função conectar com o banco de dados

    public function conecta() {
    try {
        $this->conection = new PDO("mysql:host=".$this->local.";dbname=$this->db",
        $this->user, $this->password); 
        $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conection;  // <-- return the PDO object here!
    } catch (PDOException $err) {
        die("Connection Failed: " . $err->getMessage());
        // no need to return false after die()
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


        $result = $this->execute($query,array_values($values));

        if($result){
            return true;
        }
        else{
            return false;
        }

        
    }

    public function insert_LastId($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO ' . $this->table .'  (' .implode(',',$fields). ') VALUES (' .implode(',',$binds).')';


        $res = $this->execute($query, array_values($values));   

        $lastId = $this->conection->lastInsertId();  

        if($res){
            return $lastId;
        }
        else{
            return false;
        }
        
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
        $query = 'DELETE FROM'.$this->table.'WHERE'.$where;

        $this->execute($query);

        return true;

        // Monta a cláusula WHERE se fornecida
        $where = strlen($where) ? 'WHERE '.$where : '';

        // Monta a query de DELETE
        $query = 'DELETE FROM '.$this->table.' '.$where;

        // Executa a query
        return $this->execute($query);
    }


    // Função para editar a dados do banco de dados

    public function update($where, $values){
        $fields = array_keys($values);

        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).' =? WHERE '.$where;

        $this->execute($query,array_values($values));
        return  true;

    }

    public function select_pedido(){
        $query = "SELECT pedido.id_pedido AS ID, sacola.valor_total AS Valor, pedido.tipo AS Tipo,  cliente.estado AS UF FROM pedido 
        JOIN sacola ON pedido.sacola_id_sacola = sacola.id_sacola
        JOIN cliente ON sacola.cliente_id_cliente = cliente.id_cliente";

        return $result = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);
    }






}


?>