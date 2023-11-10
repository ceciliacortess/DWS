<?php
$num1 = 2;
$num2 = 3;

echo "El número 1 es " . $num1 . "<br>";
echo "El número 2 es " . $num2 . "<br>";
if ($num1>$num2) {
    echo "El ". $num1 . "es mayor a " . $num2;
}elseif ($num1==$num2){
    echo "Los números son iguales";
}else{
    echo "El ". $num2 . " es mayor a " . $num1;
}
?>