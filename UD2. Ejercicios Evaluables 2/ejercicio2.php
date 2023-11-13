<?php
echo "Hecho con bucle for<br>";
for ($i=0; $i <= 100; $i++) { 
    if($i % 5 == 0){
        echo $i . "<br>";
    }
}

echo "<br><br>";

echo "Hecho con bucle while<br>";
$j = 0;
while ($j >= 0 && $j <= 100) {
    if($j % 5 == 0){
        echo $j . "<br>";
        $j++;
    }else{
        $j++;
    }
}

echo "<br><br>";

echo "Hecho con bucle do-while<br>";
$k = 0;
do{
    if($k % 5 == 0){
        echo $k . "<br>";
        $k++;
    }else{
        $k++;
    }
}while ($k >= 0 && $k <= 100);
?>