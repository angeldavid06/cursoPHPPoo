<?php
    class clasePadre {
        public function metodoPadre () {
            return "Hola desde el padre";
        }
        public function metodo1() {
            return "Este es un método padre";
        }
    }

    class claseHijo extends clasePadre {
        public function metodoHijo() {
            return parent::metodo1();
        }

        public function metodo1() {
            return "Este es un método hijo";
        }
    }
    echo claseHijo::metodoHijo();
?>





