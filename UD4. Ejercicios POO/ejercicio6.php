<?php
class Calculadora {
    public static $num1 = 8;

    public static function sumar($num2) {
        return self::$num1 + $num2;
    }

    public static function restar($num2) {
        return self::$num1 - $num2;
    }

    public static function multiplicar($num2) {
        return self::$num1 * $num2;
    }

    public static function dividir($num2) {
        if ($num2 != 0) {
            return self::$num1 / $num2;
        } else {
            echo "Error: No se puede dividir por cero.";
            return false;
        }
    }
}

$num1 = Calculadora::$num1;

echo "<h1>Ejercicio 6</h1>";
echo "Suma: $num1 + 3 = " . Calculadora::sumar(3) . "<br>";
echo "Resta: $num1 - 2 = " . Calculadora::restar(2) . "<br>";
echo "Multiplicación: $num1 * 6 = " . Calculadora::multiplicar(6) . "<br>";
echo "División: $num1 / 2 = " . Calculadora::dividir(2) . "<br>";
?>