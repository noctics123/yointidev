<?php

ob_start();
require_once('../includes/funciones2.php');
$auth = estaAutenticado();
 

$auth = $_SESSION['login'];

if(!$auth){
    header("Location: /yointidev-main/index.php");
}

incluirTemplateAdmin('header');
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
<body>
    <br></br><br></br>
    <center><p style="color: coral;">Administrador</p></center>
</body>
</html>