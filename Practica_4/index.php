<?php
    class retornoDatos {
        public function retornaJSON () {
            $arr = array(
                    "HDD" => 500,
                    "Monitor" => 21,
                    "RAM" => 8
            );
            return json_encode($arr);
        }
    }

    $obj = new retornoDatos();
    var_dump($obj->retornaJSON());
?>




