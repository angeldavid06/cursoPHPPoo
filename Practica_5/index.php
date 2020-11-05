<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <label for="">Número 1</label>
        <br>
        <input type="text" name="v1" id="">
        <br>
        <label for="">Número 2</label>
        <br>
        <input type="text" name="v2" id="">
        <p></p>
        <select name="opcion" id="">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicar">Multiplicación</option>
            <option value="dividir">División</option>
        </select>
        <p></p>
        <button>Calcular</button>
    </form>
</body>
</html>

