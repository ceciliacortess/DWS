<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    // Establecer la cookie con el nombre y una duración de un año (365 días)
    setcookie('nombre_visitante', $nombre, time() + 365 * 24 * 60 * 60);
}

if(isset($_COOKIE['nombre_visitante'])) {
    $nombre_visitante = $_COOKIE['nombre_visitante'];
    echo "Bienvenido de nuevo, $nombre_visitante!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida con Cookie</title>
</head>
<body>

<?php
// Mostrar el formulario si la cookie no existe o no se ha enviado el formulario
if(!isset($_COOKIE['nombre_visitante']) || !isset($_POST['nombre'])) {
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
}
?>

</body>
</html>


