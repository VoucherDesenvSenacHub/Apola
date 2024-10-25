<?php
$banco = "cadastro";
$local = "";
$user = "devweb";
$password = "suporte@22";

$con = new mysqli($local,$user,$password,$banco);
if ($con->connect_error) {
    die("Falha na conexão". mysqli_error($con));
}
else{
    echo "conectado com sucesso!";
} 