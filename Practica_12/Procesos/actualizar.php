<?php
    require_once "../conectar.php";
    require_once "../metodosCrud.php";

    $id = $_POST['id'];
    $nom = $_POST['txt_nom'];
    $ap = $_POST['txt_ap'];

    $datos = array(
                    $nom,
                    $ap,
                    $id
                    );

    $obj = new Metodos();
    if ($obj->actualizaDatos($datos) == 1) {
        header("location:../index.php");
    } else {
        echo "Error al agregar";
    }
?>


