<?php

//Iniciar la secion
session_start();

//reinicia la secion a un arreglo vacio
$_SESSION = [];

header('Location: /yointidev-main/');
