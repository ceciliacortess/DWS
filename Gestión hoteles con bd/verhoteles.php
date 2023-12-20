<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver hoteles</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <img src="img/listadohoteles.png">
    <a href="ejercicioprueba.html"><button>Volver</button></a>
    <?php
    // Configuración de la conexión a la base de datos
    $host = "localhost";
    $usuario = "Cecilia";
    $contrasena = "Cecilia";
    $base_de_datos = "hoteles";

    $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para obtener todos los datos de la tabla
    $sql = "SELECT * FROM hoteles";
    $result = $conexion->query($sql);

    // Mostrar los datos en una tabla HTML
    if ($result->num_rows > 0) {
        echo "<table class='tablaVer'><thead><tr>";

        // Obtener nombres de columnas
        $row = $result->fetch_assoc();
        foreach ($row as $key => $value) {
            echo "<th>" . $key . "</th>";
        }

        echo "</tr></thead><tbody>";

        // Mostrar datos de la tabla
        $result->data_seek(0); // Reiniciar el puntero del resultado
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "No se encontraron resultados.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>

</html>
