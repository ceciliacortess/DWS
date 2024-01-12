<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Bienvenido, $username. <br>Esta es tu página de bienvenida.";
} else {
    header('Location: index.php');
    exit();
}
?>
