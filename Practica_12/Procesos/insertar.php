<?php
    require_once "../conectar.php";
    require_once "../metodosCrud.php";

    $nom = $_POST['txt_nom'];
    $ap = $_POST['txt_ap'];

    $datos = array(
                    $nom,
                    $ap
                    );

    $obj = new Metodos();
    if ($obj->insertarDatos($datos) == 1) {
        header("location:../index.php");
    } else {
        echo "Error al agregar";
    }
?>



