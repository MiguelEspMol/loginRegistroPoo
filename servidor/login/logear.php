<?php session_start();

    include "../../clases/auth.php";
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];


    $auth = new auth();

    if ($auth->logear($nombre, $password)) { 
        header("location:../../inicio.php");
    } else {
        echo "No se puedo ingresar al sistema";
    }



?>