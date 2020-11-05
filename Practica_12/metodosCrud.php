<?php
    class Metodos {
        public function mostrarDatos($sql) {
            $c = new Conectar();
            $conn = $c->conexion();

            $result = mysqli_query($conn,$sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        
        public function insertarDatos($datos) {
            $c = new Conectar();
            $conn = $c->conexion();

            $sql = "INSERT INTO t_persona (Nombre, Apellidos) VALUES ('$datos[0]','$datos[1]')";

            return $result = mysqli_query($conn,$sql);
        }

        public function actualizaDatos($datos) {
            $c = new Conectar();
            $conn = $c->conexion();

            $sql = "UPDATE t_persona SET Nombre = '$datos[0]', Apellidos =  '$datos[1]' WHERE id = $datos[2]";

            return $result = mysqli_query($conn,$sql);
        }

        public function eliminarDatos($id) {
            $c = new Conectar();
            $conn = $c->conexion();

            $sql = "DELETE FROM t_persona WHERE id = $id";

            return $result = mysqli_query($conn,$sql);
        }
    }
?>


