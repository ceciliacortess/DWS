<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="ejercicio2.css">
</head>

<body>
    <h1>Calculadora</h1><br><br>
    <form method="POST" action="ejercicio2.php">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required>
        <br><br>
        <label>
            <input type="radio" class="radio" value="suma" name="operaciones">+
            <input type="radio" class="radio" value="resta" name="operaciones">-
            <input type="radio" class="radio" value="multiplicacion" name="operaciones">*
            <input type="radio" class="radio" value="division" name="operaciones">/
        </label>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST["operaciones"];

        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operacion) {
                case 'suma':
                    $resultado = $num1 + $num2;
                    break;
                case 'resta':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacion':
                    $resultado = $num1 * $num2;
                    break;
                case 'division':
                    $resultado = $num1 / $num2;
                    break;
                default:
                    $resultado = "Error: Operación no válida";
            }

            echo "<p>El resultado es $resultado<p>";
        } else {
            echo "<p>Ingrese valores numéricos.</p>";
        }
    }

    ?>
</body>

</html>