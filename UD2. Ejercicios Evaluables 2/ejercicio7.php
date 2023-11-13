<?php
$numeros = [1, -2, 3, -4, 5, -6, 0, 7, -8, 9, -10, 0];
$sumaPos = 0;
$contadorPos = 0;
$sumaNeg = 0;
$contadorNeg = 0;
$contadorCeros = 0;

for ($i=0; $i < count($numeros); $i++) { 
    if($numeros[$i]>0){
        $sumaPos += $numeros[$i];
        $contadorPos ++;
    }elseif ($numeros[$i]<0) {
        $sumaNeg += $numeros[$i];
        $contadorNeg ++;
    }else{
        $contadorCeros++; 
    }
}
$mediaPos = $sumaPos / $contadorPos;
echo "La media de los números positivos es " . $mediaPos . "<br>";
$mediaNeg = $sumaNeg / $contadorNeg;
echo "La media de los números negativos es " . $mediaNeg . "<br>";
echo "Hay " . $contadorCeros . " números 0";
?>