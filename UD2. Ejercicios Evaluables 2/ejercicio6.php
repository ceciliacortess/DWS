<?php
$numeros = [1, 2, 3, 4, -5, 6, 0, 7, 8, 9, -10];
$suma = 0;
$contador = 0;
for ($i=0; $numeros[$i]>=0 ; $i++) {
    $suma += $numeros[$i];
    $contador ++;
}
$media = $suma / $contador;
echo "La media es " . $media;
?>