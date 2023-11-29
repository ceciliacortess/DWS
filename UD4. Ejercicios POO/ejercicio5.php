<?php
class Calculadora {
    public static function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public static function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public static function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            echo "Error: No se puede dividir por cero.";
            return false;
        }
    }
}

echo "<h1>Ejercicio 5</h1>";
echo "Suma: 5 + 3 = " . Calculadora::sumar(5, 3) . "<br>";
echo "Resta: 8 - 2 = " . Calculadora::restar(8, 2) . "<br>";
echo "Multiplicación: 4 * 6 = " . Calculadora::multiplicar(4, 6) . "<br>";
echo "División: 10 / 2 = " . Calculadora::dividir(10, 2) . "<br>";
?>