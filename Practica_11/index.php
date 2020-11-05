<?php
    class miClase {
        public $mensaje = 1;

        public function Hola() {
            return "Hola";
        }

        public static function metodo() {
            return self::Hola();
        }
    }

    echo miClase::metodo();
?>


