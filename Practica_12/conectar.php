<?php
    class Conectar {
        private $servidor = "localhost";
        private $usuario = "root";
        private $db = "crudpoo";
        private $password = "";

        public function conexion() {
            $conexion = mysqli_connect($this->servidor,
                                        $this->usuario,
                                        $this->password,
                                        $this->db);
            return $conexion;
        }
    }
?>

