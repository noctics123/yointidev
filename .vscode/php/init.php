<?php

session_start();

require 'Medoo.php';

use Medoo\Medoo;

try{
    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'yointi',
        'username' => 'root',
        'password' => '',
    
    ]);
}catch(PDOException $e){
    echo "No se pudo conectar a la base de Datos";
}


?>