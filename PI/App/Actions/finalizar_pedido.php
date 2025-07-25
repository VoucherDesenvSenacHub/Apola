
<?php


require '../../App/config.inc.php';
require '../../App/Session/Login.php';


header('Content-Type: application/json');



$data = json_decode(file_get_contents('php://input'), true);


print_r($data);
exit;