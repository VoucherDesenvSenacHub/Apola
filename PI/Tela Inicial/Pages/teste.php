
<?php
require '../Entity/Cliente.php';


$obj = new Cliente();

print_r($obj->getUsuarioPorEmail('matheus3454@gmail.com'));