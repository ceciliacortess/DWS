<?php
$precio = 21;
$unidades = 10;
$IVA = 0.21;
$importeBase = $precio * $unidades;
$importeIVA = $importeBase * $IVA;
$importeTotal = $importeBase + $importeIVA;
echo "El precio por unidad son " . $precio . " €<br>";
echo "Las unidades adquiridas son " . $unidades . " €<br>";
echo "El importe base es de " . $importeBase . " €<br>";
echo "El importe del IVA es de " . $importeIVA . " €<br>";
echo "El importe final de la factura es de " . $importeTotal . " €<br>";
?>