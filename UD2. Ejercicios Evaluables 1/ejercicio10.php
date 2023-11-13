<?php
$codigo = 1;
$nombre = "Tom";
$apellidos = "Smith";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "New York";

if($puesto == "Vendedor" && $sueldo > 70000){
    $retencion1 = $sueldo * 0.1;
}else{
    $retencion1 = $sueldo * 0.2;
}

if($edad > 50 || $num_hijos > 2){
    $retencion2 = $sueldo * 0.05;
}else{
    $retencion2 = $sueldo * 0.1;
}

if($sueldo > 50000 && $sueldo < 80000){
    $retencion3 = $sueldo * 0.05;
}else{
    $retencion3 = $sueldo * 0.12;
}

if($num_hijos == 1 || $num_hijos == 2){
    $retencion4 = $sueldo * 0.1;
}else{
    $retencion4 = $sueldo * 0.05;
}

if($sueldo > 80000 || $num_hijos == 0){
    $retencion5 = $sueldo * 0.15;
}else{
    $retencion5 = $sueldo * 0.05;
}

$retencionTotal = $retencion1 + $retencion2 + $retencion3 + $retencion4 + $retencion5;
$sueldoFinal = $sueldo - $retencionTotal;
echo "El sueldo inicial es de " . $sueldo . "€<br>";
echo "La retencion total es de " . $retencionTotal . " €<br>";
echo "El sueldo final es de " . $sueldoFinal . "€";
?>