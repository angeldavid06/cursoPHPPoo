<?php
    class Metodos {
        public function mandarColor ($v) {
            if ($v == 1) {
                return "rojo";
            } else if ($v == 2) {
                return "negro";
            } else if ($v == 3) {
                return "azul";
            }
        }

        public function darDeAltaColor ($tipoColor) {
            return self::mandarColor($tipoColor);
        }
    }

    $obj = new Metodos();
    echo $obj->darDeAltaColor(1);
?>



