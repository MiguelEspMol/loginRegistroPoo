<?php
    include "../../clases/auth.php";

    $nombre = $_POST['nombre'];
    $paterno_nombre = $_POST['paterno_nombre'];
    $materno_nombre = $_POST['materno_nombre'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $auth = new auth();

    if ($auth->registrar($nombre, $paterno_nombre, $materno_nombre, $direccion, $celular, $password)) {
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }


?>