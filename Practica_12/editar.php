<?php
    require_once "conectar.php";
    $obj = new Conectar();
    $conn =  $obj->conexion();
    $id=$_GET['id'];
    $sql = "SELECT Nombre, Apellidos FROM t_persona WHERE id = '$id'";
    $res = mysqli_query($conn,$sql);
    $ver=mysqli_fetch_row($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
</head>
<body>
    <form action="procesos/actualizar.php" method="POST">
        <input type="text" hidden="" name="id" id="id" value="<?php echo $id;?>">
        <label for="txt_nom">Nombre</label>
        <p></p>
        <input type="text" name="txt_nom" id="txt_nom" value="<?php echo $ver[0];?>">
        <p></p>
        <label for="txt_ap">Apellidos</label>
        <p></p>
        <input type="text" name="txt_ap" id="txt_ap" value="<?php echo $ver[1];?>">
        <p></p>
        <button>Agregar</button>
        <p></p>
    </form>
</body>
</html>


