<?php

    require_once "calculo.php";
    $calcular = new calculadora();

    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $opcion = $_POST['opcion'];

    echo "Resultado: ".$calcular->calcularDatos($v1,$v2,$opcion);
?>


