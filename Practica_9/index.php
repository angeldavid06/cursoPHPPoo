<?php
    class clase1 {
        private function saludar() {
            return "Saludando";
        }   

        public function mandaSaludo() {
            return self::saludar();
        }
    }

    echo clase1::mandaSaludo();
?>



