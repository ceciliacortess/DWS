<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

<?php
echo "<h1>Ejercicio 6</h1>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = "usuario";
    $contrasena_valida = "clave";

    if ($_POST['usuario'] == $usuario_valido && $_POST['contrasena'] == $contrasena_valida) {
        setcookie('sesion_valida', true, 0);

        header("Location: principal.php");
        exit();
    } else {
        echo "<p>Usuario o contraseña incorrectos. Inténtelo nuevamente.</p>";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>
