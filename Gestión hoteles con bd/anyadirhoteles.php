<?php
$error = '';
$nombre = '';
$cat = '';
$hab = '';
$poblacion = '';
$direccion = '';

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST['submit'])) {
    $nombre = clean_text($_POST['nombre']);
    $cat = clean_text($_POST['cat']);
    $hab = $_POST['hab'];
    $poblacion = clean_text($_POST['pob']);
    $direccion = clean_text($_POST['dir']);
    $direccion = str_replace(',', ';', $direccion);

    if (empty($nombre) || empty($cat) || empty($hab) || empty($poblacion) || empty($direccion)) {
        $error = '<label>Ninguno de los campos puede estar vacío</label>';
    } else {
        $regex_categoria = '/^\d+\*$/';
        if (!preg_match($regex_categoria, $cat)) {
            $error = '<label>La categoría debe ser un número seguido de un asterisco</label>';
        } else {
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

            // Preparar la consulta SQL
            $sql = "INSERT INTO hoteles (Nombre, Categoria, Habitaciones, Poblacion, Direccion)
                    VALUES ('$nombre', '$cat', '$hab', '$poblacion', '$direccion')";

            // Ejecutar la consulta
            if ($conexion->query($sql) === TRUE) {
                $error = '<label>Hotel añadido correctamente</label>';
                $nombre = '';
                $cat = '';
                $hab = '';
                $poblacion = '';
                $direccion = '';
            } else {
                $error = '<label>Error al añadir el hotel: ' . $conexion->error . '</label>';
            }

            // Cerrar la conexión
            $conexion->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Añadir hoteles</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <img src="img/anyadirhoteles.png">
    <?php echo $error; ?>
    <form method="POST">
        <table class="tablaAnyadir">
            <tr>
                <td><label for="nombre">Nombre: </label></td>
                <td><input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"></td>
            </tr>
            <tr>
                <td><label for="cat">Categoría: </label></td>
                <td><input type="text" id="cat" name="cat" value="<?php echo $cat; ?>"></td>
            </tr>
            <tr>
                <td><label for="hab">Habitaciones: </label></td>
                <td><input type="number" id="hab" name="hab" min="0" value="<?php echo $hab; ?>"></td>
            </tr>
            <tr>
                <td><label for="pob">Población: </label></td>
                <td><input type="text" id="pob" name="pob" value="<?php echo $poblacion; ?>"></td>
            </tr>
            <tr>
                <td><label for="dir">Dirección: </label></td>
                <td><input type="text" id="dir" name="dir" value="<?php echo $direccion; ?>"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Añadir">
        <br><br>
    </form>

    <a href="ejercicioprueba.html"><button>Volver</button></a>
    <br><br>

</body>

</html>
