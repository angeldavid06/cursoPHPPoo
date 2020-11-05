<?php
    require_once "conectar.php";
    require_once "metodosCrud.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="procesos/insertar.php" method="POST">
        <label for="txt_nom">Nombre</label>
        <p></p>
        <input type="text" name="txt_nom" id="txt_nom">
        <p></p>
        <label for="txt_ap">Apellidos</label>
        <p></p>
        <input type="text" name="txt_ap" id="txt_ap">
        <p></p>
        <button>Agregar</button>
        <p></p>
    </form>
    <table style="boder-collapse: collapse;" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $obj = new Metodos();
            $sql = "SELECT * FROM t_persona";
            $datos = $obj->mostrarDatos($sql);
        
            foreach ($datos as $key) {
        ?>
            <tr>
                <td><?php echo $key['Nombre'];?></td>
                <td><?php echo $key['Apellidos'];?></td>
                <td>
                    <a href="editar.php?id=<?php echo $key['id']?>">
                        Editar
                    </a>
                </td>
                <td>
                    <a href="procesos/eliminar.php?id=<?php echo $key['id']?>">
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</body>
</html>



