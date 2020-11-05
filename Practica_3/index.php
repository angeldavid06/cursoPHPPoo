<?php

    class miClase {
        public $resultado = 0;

        public function miMetodo ($v1, $v2) {
            $this->resultado = $v1 + $v2;
            return $this->resultado;
        }
    }


    /* 
        Instanciar un objeto.
    */

    $miObj = new miClase();

    echo $miObj->miMetodo(5, 5);
?>

