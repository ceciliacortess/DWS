<?php
session_start();

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    if ($_SESSION['username'] === 'admin') {
        echo '<h1>Ejercicio 11</h1>';
        echo 'Bienvenido, administrador. Aquí está la información del usuario.';
    } else {
        echo '<h1>Ejercicio 11</h1>';
        echo 'Acceso denegado. No tienes permisos para acceder a la información del usuario.';
    }
} else {
    header('Location: ejercicio11a.html');
    exit();
}
?>
