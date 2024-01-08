<?php
// Verificar si la cookie de sesión está presente
if (!isset($_COOKIE['sesion_valida'])) {
    // Redireccionar a la página de inicio de sesión si no hay una sesión válida
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<h1>Bienvenido a la Página Principal</h1>

<nav>
    <ul>
        <li><a href="">Empresa</a></li>
        <li><a href="">Servicios</a></li>
        <li><a href="">Contacto</a></li>
    </ul>
</nav>

<a href="cerrar_sesion.php">Cerrar Sesión</a>

</body>
</html>
