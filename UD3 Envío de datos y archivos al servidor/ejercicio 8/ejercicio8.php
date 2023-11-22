<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Validación</title>
</head>
<body>
    <h1>Resultado de Validación</h1>

    <?php
    // Función para validar el tipo de dato
    function validarDato($dato, $filtro) {
        switch ($filtro) {
            case 'Email':
                return filter_var($dato, FILTER_VALIDATE_EMAIL) !== false;
            case 'Sólo números':
                return is_numeric($dato);
            case 'NIF':
                // Validación simple para NIF (8 números y una letra)
                return preg_match('/^[0-9]{8}[A-Za-z]$/', $dato);
            default:
                return false;
        }
    }

    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dato = isset($_POST["dato"]) ? $_POST["dato"] : '';
        $filtro = isset($_POST["filtro"]) ? $_POST["filtro"] : '';

        // Validar el dato según el filtro seleccionado
        $esValido = validarDato($dato, $filtro);

        // Mostrar el resultado
        echo "<p><strong>Dato Introducido:</strong> $dato</p>";
        echo "<p><strong>Filtro Seleccionado:</strong> $filtro</p>";
        echo "<p><strong>Resultado de Validación:</strong> " . ($esValido ? 'Válido' : 'No válido') . "</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>
