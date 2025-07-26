<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();


class Database{
    public $conection;
    public string $local="localhost";
    public string $db="140p1";
    public string $user = "root";
    public string $password = "";
    public $table;

    // public $conection;
    
    // public string $local="192.168.22.9";
    // public string $db="140p1";
    // public string $user = "devweb";
    // public string $password = "voucher140";
    // public $table;
    
    
    public function __construct($table = null){
        $this->table = $table;
        $result = $this->conecta();
    }
    
    public function conecta(){
        try {
            $this->conection = new PDO("mysql:host=".$this->local.";dbname=$this->db",$this->user,$this->password); 
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo "Conectado com Sucesso!!";
        } catch (PDOException $err) {
            //retirar msg em produção
            die("ERRO DE CONEXAO: " . $err->getMessage());
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
    
    public function select($where = null, $order = null, $limit = null, $fields = '*') {

        $where = !empty($where) ? 'WHERE ' . $where : '';
        $order = !empty($order) ? 'ORDER ' . $order : '';
        $limit = !empty($limit) ? 'LIMIT ' . $limit : '';
    
        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;
    
        return $this->execute($query);
    }
    


    // Função para deletar dados do banco de dados
    public function delete($where)
    {
        // Monta a cláusula WHERE se fornecida
        $where = strlen($where) ? 'WHERE '.$where : '';
    
        // Monta a query de DELETE com espaços corretos
        $query = 'DELETE FROM '.$this->table.' '.$where;
    
        // Executa a query
        return $this->execute($query);
    }
    


    // Função para editar a dados do banco de dados

    public function update($where, $values) {
        $fields = array_keys($values);
        $set = implode(' = ?, ', $fields) . ' = ?';
        $query = 'UPDATE ' . $this->table . ' SET ' . $set . ' WHERE ' . $where;
    
        return $this->execute($query, array_values($values));
    }
    

    public function select_perfil($id_cli){

        // COM FIELDS NA FUNÇÃO SELECT COMO PARAMENTRO = "$fields = '*'
        $query = 'SELECT usuario.nome,cliente.sobrenome,usuario.email,cliente.cpf,usuario.foto_perfil,cliente.cep,cliente.telefone,cliente.numero_casa,cliente.rua,cliente.bairro,cliente.cidade,cliente.estado, usuario.id_usuario
        from cliente inner join usuario
        on usuario.id_usuario = cliente.id_usuario
        and cliente.id_cliente = '.$id_cli;

        return $this->execute($query);
        
    }

    public function select_pedido($where = '') {
        $sql = "
            SELECT 
                pedido.id_pedido AS ID,
                pedido.tipo AS Tipo,
                pedido.status_pedido AS Status,
                pedido.data_pedido AS DataPedido,
                pedido.codigo_rastreio AS Rastreio,
                sacola.valor_total AS Valor,
                COALESCE(cliente1.estado, cliente2.estado) AS UF,
                produto_perso.descricao AS DescricaoPersonalizada
            FROM pedido
            LEFT JOIN sacola ON pedido.sacola_id_sacola = sacola.id_sacola
            LEFT JOIN cliente cliente1 ON sacola.cliente_id_cliente = cliente1.id_cliente
            LEFT JOIN cliente cliente2 ON pedido.id_cliente = cliente2.id_cliente
            LEFT JOIN produto_perso ON pedido.produto_perso_id_produto_perso = produto_perso.id_produto_perso
        ";
    
        if (!empty($where)) {
            $sql .= " WHERE $where";
        }
    
        return $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    

    public function select_by_id($id){
        $query = "SELECT 
                    produto.nome AS nome_produto, 
                    produto.quantidade AS quantidade, 
                    produto.cor AS cor, 
                    produto.imagem AS imagem,
                    sacola.valor_total AS valor_total, 
                    pedido.codigo_rastreio AS rastreio, 
                    pedido.status_pedido AS status_pedido,
                    cliente.telefone AS contato, 
                    cliente.cep AS cep, 
                    cliente.rua AS rua, 
                    cliente.numero_casa AS numero, 
                    cliente.bairro AS bairro,
                    cliente.cidade AS cidade, 
                    cliente.estado AS estado, 
                    usuario.nome AS nome_cliente, 
                    cliente.sobrenome AS sobrenome
                FROM produto 
                JOIN sacola ON produto.id_produto = sacola.produto_id_produto 
                JOIN pedido ON sacola.produto_id_produto = pedido.sacola_produto_id_produto 
                JOIN cliente ON pedido.sacola_cliente_id_cliente = cliente.id_cliente 
                JOIN usuario ON cliente.id_usuario = usuario.id_usuario
                WHERE pedido.id_pedido = ?";
    
        $stmt = $this->execute($query, [$id]);
    
        return $stmt;
    }

    /*sobreNois*/

    public function select_avaliacao_loja(){
        $query = "SELECT avaliacao_loja.comentario, avaliacao_loja.notas, usuario.nome, cliente.sobrenome, cliente.foto_perfil
        FROM avaliacao_loja JOIN cliente ON 
        avaliacao_loja.id_cliente = cliente.id_cliente JOIN usuario ON cliente.id_usuario = usuario.id_usuario ORDER BY avaliacao_loja.id_avaliacao_loja DESC";
        $stmt = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);
        
        if($stmt){
            return $stmt;
        }
        else{
            return false;
        }


    }

    public function select_avaliacao_produto($id_produto){
        $query = "SELECT avaliacao_produto.comentario, avaliacao_produto.notas, usuario.nome, cliente.sobrenome FROM avaliacao_produto
        JOIN cliente ON avaliacao_produto.id_cliente = cliente.id_cliente JOIN usuario ON cliente.id_usuario = usuario.id_usuario WHERE id_produto = '$id_produto'";
        $stmt = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);
        
        if($stmt){
            return $stmt;
        }
        else{
            return false;
        }
    }

    public function select_pedido_by_id($id){
        $query = "SELECT 
                    produto.nome AS nome_produto, 
                    produto.quantidade AS quantidade, 
                    produto.cor AS cor, 
                    produto.imagem AS imagem,
                    sacola.valor_total AS valor_total, 
                    pedido.codigo_rastreio AS rastreio, 
                    pedido.status_pedido AS status_pedido,
                    cliente.telefone AS contato, 
                    cliente.cep AS cep, 
                    cliente.rua AS rua, 
                    cliente.numero_casa AS numero, 
                    cliente.bairro AS bairro,
                    cliente.cidade AS cidade, 
                    cliente.estado AS estado, 
                    usuario.nome AS nome_cliente, 
                    cliente.sobrenome AS sobrenome
                FROM produto 
                JOIN sacola ON produto.id_produto = sacola.produto_id_produto 
                JOIN pedido ON sacola.produto_id_produto = pedido.sacola_produto_id_produto 
                JOIN cliente ON pedido.sacola_cliente_id_cliente = cliente.id_cliente 
                JOIN usuario ON cliente.id_usuario = usuario.id_usuario
                WHERE pedido.id_pedido = ?";
    
        $stmt = $this->execute($query, [$id]);
    
        return $stmt;
    }
    public function select_pedido_personalizado_by_id($id){
        $query = "SELECT 
        produto_perso.tipo AS tipo,
        produto_perso.descricao AS descricao_personalizada,
        imagens_produto_perso.imagem1,
        imagens_produto_perso.imagem2,
        imagens_produto_perso.imagem3,
        imagens_produto_perso.imagem4,
        IFNULL(pedido.codigo_rastreio, '0') AS codigo_rastreio,
        IFNULL(pedido.valor_total_perso, 0) AS valor_total,
        pedido.status_pedido,
        pedido.data_pedido,
        cliente.telefone AS contato,
        cliente.cep,
        cliente.rua,
        cliente.numero_casa AS numero,
        cliente.bairro,
        cliente.cidade,
        cliente.estado,
        usuario.nome AS nome_cliente,
        cliente.sobrenome,
        pedido.id_pedido
    FROM pedido
    JOIN cliente ON pedido.id_cliente = cliente.id_cliente
    JOIN usuario ON cliente.id_usuario = usuario.id_usuario
    JOIN produto_perso ON pedido.produto_perso_id_produto_perso = produto_perso.id_produto_perso
    LEFT JOIN imagens_produto_perso ON produto_perso.id_produto_perso = imagens_produto_perso.id_produto_perso
    LEFT JOIN sacola ON pedido.sacola_id_sacola = sacola.id_sacola
    WHERE pedido.id_pedido = ?
    ";
        
        return $this->execute($query, [$id]);
    }
    
    
    





    public function select_produto_por_categoria($categoria){
        $query =  "Select 
            favoritos.status_favoritos, 
            produto.id_produto, 
            categoria.nome AS categoria_nome, 
            produto.imagem, 
            produto.nome AS produto_nome, 
            produto.preco 
        FROM produto
        JOIN categoria on produto.categoria_id_categoria = categoria.id_categoria 
        LEFT JOIN favoritos ON produto.id_produto = favoritos.produto_id_produto
        WHERE
        categoria.nome = '". $categoria. "' 
        AND categoria.status_categoria = 'a' LIMIT 10  " ;

    
        return $result = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);
    }


    public function select_produto_por_aleatorio(){
                $query = "SELECT 
                favoritos.status_favoritos, 
                produto.id_produto, 
                categoria.nome AS categoria_nome, 
                produto.imagem, 
                produto.nome AS produto_nome, 
                produto.preco 
            FROM produto 
            JOIN categoria ON produto.categoria_id_categoria = categoria.id_categoria 
            LEFT JOIN favoritos ON produto.id_produto = favoritos.produto_id_produto
            WHERE produto.status_produto = 'a' 
            ORDER BY RAND() 
            LIMIT 10;
        ";

    
         return $result = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);

         


    
    }



    public function select_produto_favoritos($id_cliente)
    {

        $query = "
        SELECT 
            favoritos.status_favoritos, 
            produto.id_produto, 
            categoria.nome AS categoria_nome, 
            produto.imagem, 
            produto.nome AS produto_nome, 
            produto.preco 
        FROM produto 
        JOIN categoria ON produto.categoria_id_categoria = categoria.id_categoria 
        JOIN favoritos ON produto.id_produto = favoritos.produto_id_produto 
        WHERE 
            favoritos.status_favoritos = 'a'
            AND favoritos.cliente_id_cliente = '$id_cliente'

        ";



        return $result = $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);


    }

    public function select_buscar_produto_cart($ids_prod)
    {
        if (empty($ids_prod)) {
            return [];
        }
    
        $placeholders = implode(',', array_fill(0, count($ids_prod), '?'));
    
        $query = "SELECT * FROM produto WHERE id_produto IN ($placeholders)";
    
        return $this->execute($query, $ids_prod)->fetchAll(PDO::FETCH_ASSOC);
    }
    










}


?>