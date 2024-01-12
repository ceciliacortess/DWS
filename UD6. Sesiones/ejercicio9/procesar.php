<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'usuario' && $password === 'clave') {
    $_SESSION['username'] = $username;

    header('Location: bienvenida.php');
    exit();
} else {
    echo 'Credenciales incorrectas. <a href="index.php">Volver al inicio</a>';
}
?>
