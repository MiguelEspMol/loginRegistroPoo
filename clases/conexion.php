<?php
    class conexion {
        public $servidor = 'localhost';
        public $nombre = 'root';
        public $paterno_nombre = 'root';
        public $materno_nombre = 'root';
        public $direccion = 'root';
        public $celular = 'root';
        public $password = '';
        public $database = 'auxiliares_proyecto';
        public $port = 3306;

        public function conectar() {
            return mysqli_connect(
                $this->servidor,
                $this->nombre,
                $this->password,
                $this->database,
                $this->port
            );
        }
    } 

?>