<?php

//Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$email = "cerio1@gmail.com";
$password = 1234568;

$passwordHash = password_hash($password,PASSWORD_DEFAULT);

// var_dump($passwordHash);

//Query para crear el usuario
$query = "INSERT INTO admins(email, password) values ('${email}','${passwordHash}')";
// echo $query;
// // exit;

//Agregarlo a la base de datos
mysqli_query($db, $query);