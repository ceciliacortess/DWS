<?php
session_start();

if (!isset($_SESSION['entrada'])) {
    $_SESSION['entrada'] = time();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>

<h1>Bienvenido a la página</h1>
<a href="salir.php">Salir</a>

</body>
</html>
