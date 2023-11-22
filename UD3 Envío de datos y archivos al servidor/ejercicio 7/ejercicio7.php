<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos</title>
</head>
<body>
    <h1>Resultado del formulario</h1>

    <?php
    // Función para recoger y procesar datos
    function recoge($var) {
        if (isset($_GET[$var])) {
            if (is_array($_GET[$var])) {
                // Si es un array, convertir a cadena separada por comas
                return implode(", ", $_GET[$var]);
            } else {
                // Si es una cadena, realizar el procesamiento normal
                return strip_tags(trim(htmlspecialchars($_GET[$var])));
            }
        } else {
            return '';
        }
    }

    // Verificar si se recibieron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nombre = recoge("nombre");
        $sexo = recoge("sexo");
        $edad = recoge("edad");
        $peso = recoge("peso");
        $estado = recoge("estado");
        $aficiones = recoge("aficiones");

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Sexo:</strong> $sexo</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";
        echo "<p><strong>Peso:</strong> $peso kg</p>";
        echo "<p><strong>Estado Civil:</strong> $estado</p>";

        if (!empty($aficiones)) {
            if (is_array($aficiones)) {
                echo "<p><strong>Aficiones:</strong> " . implode(", ", $aficiones) . "</p>";
            } else {
                echo "<p><strong>Aficiones:</strong> $aficiones</p>";
            }
        } else {
            echo "<p><strong>Aficiones:</strong> Sin aficiones</p>";
        }
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>