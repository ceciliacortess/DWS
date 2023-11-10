<?php
$num1 = 2;
$num2 = 3;

echo "El número 1 es " . $num1 . "<br>";
echo "El número 2 es " . $num2 . "<br>";
$resultado = $num1<=>$num2;
if ($resultado == 1) {
    echo "El ". $num1 . "es mayor a " . $num2;
}elseif ($resultado == 0){
    echo "Los números son iguales";
}elseif ($resultado == -1){
    echo "El ". $num2 . " es mayor a " . $num1;
}else{
    echo "Incorrecto";
}
?>

