<?php
    $nombre = $_GET['nombre'];
    $sexo = $_GET['sexo'];
    $edad = $_GET['edad'];
    $peso = $_GET['peso'];
    $estado = $_GET['estado'];
    echo("<h1>Datos</h1><br>");
    echo("Nombre: " . $nombre . "<br>");
    echo("Sexo: " . $sexo . "<br>"); 
    echo("Edad: " . $edad . "<br>");
    echo("Peso: " . $peso . "<br>");
    echo("Estado: " . $estado . "<br>");
?>