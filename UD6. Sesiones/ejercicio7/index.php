<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Seleccionar color de fondo</h1>

    <form action="colorPage.php" method="post">
        <label for="colorSelector">Selecciona un color:</label>
        <select name="selectedColor" id="colorSelector">
            <option value="pink">Rosa</option>
            <option value="purple">Morado</option>
            <option value="skyblue">Azul</option>   
        </select>
        <br><br>
        <button type="submit" name="submit">Enviar</button>
        <button type="submit" name="delete">Eliminar Color</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
