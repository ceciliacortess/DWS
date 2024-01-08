<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

<?php
echo "<h1>Ejercicio 5</h1>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (isset($_POST['recordar'])) {
        setcookie('email_recordado', $email, time() + 365 * 24 * 60 * 60);
    }

    header("Location: ejercicio5.2.php");
    exit();
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    <label for="recordar">Recordar Dirección:</label>
    <input type="checkbox" id="recordar" name="recordar">
    <br><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>

