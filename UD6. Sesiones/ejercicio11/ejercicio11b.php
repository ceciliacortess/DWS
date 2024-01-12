<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'admin' && $password === 'contrasenya') {
    $_SESSION['authenticated'] = true;
    $_SESSION['username'] = $username;
    header('Location: ejercicio11info.php');
    exit();
} else {
    echo '<h1>Ejercicio 11</h1>';
    echo 'Acceso denegado. No tienes permisos para acceder a la información del usuario.<br><br> <a href="ejercicio11a.html">Volver al formulario</a>';
}
?>
