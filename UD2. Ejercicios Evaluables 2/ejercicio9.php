<?php
$facturas = [
    ['codArt' => 1, 'cantL' => 100, 'precioL' => 2.1],
    ['codArt' => 2, 'cantL' => 200, 'precioL' => 1.2],
    ['codArt' => 3, 'cantL' => 300, 'precioL' => 3.7],
    ['codArt' => 4, 'cantL' => 400, 'precioL' => 4.9],
    ['codArt' => 5, 'cantL' => 500, 'precioL' => 1.8],
];

$facTotal = 0;
$masde600 = 0;
$litrosArt1 = 0;

foreach ($facturas as $factura) {
    $fac = $factura['cantL'] * $factura['precioL'];
    $facTotal += $fac;
    
    if($factura['codArt'] == 1){
        $litrosArt1 = $factura['cantL'];
    }

    if($fac > 600){
        $masde600 ++;
    }
}

echo "La facturación total es de $facTotal €<br>"; 
echo "La cantidad de litros vendidos del artículo 1 son de $litrosArt1 L<br>";
echo "Hay $masde600 facturas en las que se emitieron más de 600€";

?>