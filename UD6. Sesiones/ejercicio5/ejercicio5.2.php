<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

<?php
if (isset($_COOKIE['email_recordado'])) {
    $email_recordado = $_COOKIE['email_recordado'];
    echo "<p>Dirección de correo recordada: $email_recordado</p>";
} else {
    echo "<p>No se ha recordado ninguna dirección de correo.</p>";
}
?>

</body>
</html>
