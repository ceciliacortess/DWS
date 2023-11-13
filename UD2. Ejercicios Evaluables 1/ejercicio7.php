<?php
$nomina = 1300;
if ($nomina < 800) {
    $incremento = $nomina * 0.2;
    $nomina += $incremento;
    echo "La nómina es de " . $nomina . " €";
}elseif ($nomina >= 800 && $nomina <= 1200){
    echo "La nómina es de " . $nomina . " €";
}elseif ($nomina > 1200){
    $decremento = $nomina * 0.15;
    $nomina -= $decremento;
    echo "La nómina es de " . $nomina . " €";
}else{
    echo "Incorrecto";
}
?>