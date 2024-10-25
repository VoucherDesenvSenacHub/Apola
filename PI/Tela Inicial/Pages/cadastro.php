<?php
include '../Pages/conecta.php';
// isset -> significa está setado?? existe?? 
if (isset($_POST)) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO cliente (nome,email,cpf,cep,senha) VALUES ('$nome','$email','$cpf','$cep','$senha')";
    $res = mysqli_query($con,$sql);
    if($res){
        echo "cadastro com sucesso ";
    }else{
        echo "ERRROOOOOOOOO";
    }

}