<?php
    include "conexion.php";

    class auth extends conexion {
        public function registrar($nombre, $paterno_nombre, $materno_nombre, $direccion, $celular, $password){
            $conexion = parent::conectar();
            $sql = "INSERT INTO persona (nombre, paterno_nombre, materno_nombre, direccion, celular, password)
                    VALUES (?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssss', $nombre, $paterno_nombre, $materno_nombre, $direccion, $celular, $password);
            return $query->execute();
        }

        public function logear($nombre, $password) {
            $conexion = parent::conectar();
            $passwordExistente = '';
            
            $sql = "SELECT * FROM persona
                    WHERE nombre = '$nombre'";
            $respuesta = mysqli_query($conexion, $sql);
            $passwordExistente = mysqli_fetch_array($respuesta)['password'];
        
            if (password_verify($password, $passwordExistente)) {
                $_SESSION['nombre'] = $nombre;
                return true;
            } else {
                return false;
            }
        }
    }


?>