<?php
$numeros = [1, -2, 3, -4, 5, -6, 0, 7, -8, 9, -10];
for ($i=0; $numeros[$i]!=0 ; $i++) { 
    if($numeros[$i]>0){
        echo "El número " . $numeros[$i] . " es positivo. <br>";
    }else{
        echo "El número " . $numeros[$i] . " es negativo. <br>";
    }
}
?>