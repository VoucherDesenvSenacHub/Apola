<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefone = $_POST['telefone'];
    
    // Conectar ao banco de dados
    $conn = new mysqli('10.38.0.71', 'devweb', 'suporte@22', 'APOLA');

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Atualize as informações do usuário no banco de dados
    $sql = "UPDATE usuarios SET 
                nome='$name', 
                email='$email', 
                senha='$password',  
                telefone='$telefone', 
            WHERE nome_usuario=''";

    if ($conn->query($sql) === TRUE) {
        echo "Perfil atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o perfil: " . $conn->error;
    }

    $conn->close();
}
?>
