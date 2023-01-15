<?php
    if(!empty($_POST['botonIngresar'])){
        if(!empty($_POST["user"])and !empty($_POST["password"])){
            $user=$_POST["user"];
            $password=$_POST["password"];
            $sql=$conexion ->query("select*from users where username='$user' and password='$password'");
            if($datos=$sql ->fetch_object()){
                header("location: ../../html/proyectos.html");
            }else {
                echo '<script>alert("Alert alerte-danger");	window.history.back();</script>';
            }
        }else{
            echo '<script>alert("campos vacios"); window.history.back();</script>';
        }
    }
?>