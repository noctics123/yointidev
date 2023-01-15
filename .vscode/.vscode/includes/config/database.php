<?php

function conectarDB():mysqli{
    $db = mysqli_connect('localhost','root','','yointi');
    if(!$db){
        echo "Error no se puede conectar";
        exit;
    }
    return $db;
}