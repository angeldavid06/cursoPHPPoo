<?php
    class calculadora {
        public function calcularDatos($v1,$v2,$opcion) {
            switch ($opcion) {
                case 'suma':
                    return $v1 + $v2;
                break;
                case 'resta':
                    return $v1 - $v2;
                break;
                case 'multiplicar':
                    return $v1 * $v2;
                break;
                case 'dividir':
                    return $v1 / $v2;
                break;
            }
        }
    }
?>

