
<?php

// Include Composer's autoloader
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;  // Correctly use the Dotenv class

// Load environment variables from .env file
$dotenv = Dotenv::createImmutable('/home/felix/Desktop/Apola');  // Correct instantiation
$dotenv->load();  // Load the variables

// Define constants for easier access to environment variables
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);

// var_dump($_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

// var_dump($_ENV);

function autoload($class){
    $cDir = ['Entity'];
    $iDir = null;

    foreach($cDir as $dirName):

    if(!$iDir && file_exists(__DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $class . ".class.php")):

    include_once(__DIR__ .  DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR . $class . ".class.php");
    $iDir= true;

    endif;

    endforeach;
}



spl_autoload_register('autoload');
