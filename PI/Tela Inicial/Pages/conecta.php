<?php
$banco = "";
$local = "";
$user = "";
$password = "";

$con = new mysqli($local,$user,$password,$banco);
if ($con->connect_error) {
    die("Falha na conexão". mysqli_error($con));
}
else{
    echo "conectado com sucesso!";
} 