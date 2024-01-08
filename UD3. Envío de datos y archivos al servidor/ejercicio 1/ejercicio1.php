<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if(is_numeric($num1)&&is_numeric($num2)){
        echo "<p>El resultado de la multiplicación es ".($num1 * $num2) . "</p>";
    }else{
        echo "<p>Ingrese valores numéricos.</p>";
    }
?>