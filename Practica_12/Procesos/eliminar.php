<?php
    require_once "../conectar.php";
    require_once "../metodosCrud.php";

    $id = $_GET['id'];

    $obj = new Metodos();
    if ($obj->eliminarDatos($id) == 1) {
        header("location:../index.php");
    } else {
        echo "Error al agregar";
    }
?>

