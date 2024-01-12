<?php
session_start();

if (isset($_SESSION['entrada'])) {
    $horaEntrada = $_SESSION['entrada'];

    $horaActual = time();

    $tiempoTranscurrido = $horaActual - $horaEntrada;

    $tiempoFormato = gmdate("H:i:s", $tiempoTranscurrido);

    echo "Has estado accediendo durante: $tiempoFormato";

    unset($_SESSION['entrada']);
} else {
    header('Location: index.php');
    exit();
}
?>
