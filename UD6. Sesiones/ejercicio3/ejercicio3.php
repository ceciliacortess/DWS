<?php
echo "<h1>Ejercicio 3</h1>";
if(isset($_COOKIE['visitas'])) {
    $visitas = $_COOKIE['visitas'] + 1; 
} else {
    $visitas = 0; // Establecer el contador a 1 si la cookie no existe
}
setcookie('visitas', $visitas, time() + 365 * 24 * 60 * 60); // Establecer la cookie con una duración de un año (365 días)
echo "Número de visitas: $visitas";
?>