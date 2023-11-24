<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Añadir hoteles</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <img src="anyadirhoteles.png">
    <form method="POST">
        <table class="tablaAnyadir">
            <tr>
                <td><label for="nombre">Nombre: </label></td>
                <td><input type="text" id="nombre" name="nombre"></td>
            </tr>
            <tr>
                <td><label for="cat">Categoría: </label></td>
                <td><input type="text" id="cat" name="cat"></td>
            </tr>
            <tr>
                <td><label for="hab">Habitaciones: </label></td>
                <td><input type="number" id="hab" name="hab" min="0"></td>
            </tr>
            <tr>
                <td><label for="pob">Población: </label></td>
                <td><input type="text" id="pob" name="pob"></td>
            </tr>
            <tr>
                <td><label for="dir">Dirección: </label></td>
                <td><input type="text" id="dir" name="dir"></td>
            </tr>
        </table>
    </form>
    <button type="submit">Añadir</button></a>
    <a href="ejercicioprueba.html"><button>Volver</button></a>

    <?php
    $error = '';
    $nombre = $_POST['nombre'];
    $cat = $_POST['cat'];
    $hab = $_POST['hab'];
    $poblacion = $_POST['poblacion'];
    $direccion = $_POST['direccion'];

    if (isset($_POST['submit'])) {
        if (empty($nombre) || empty($cat) || empty($hab) || empty($poblacion) || empty($direccion)) {
            echo '<script>alert("Ninguno de los campos puede estar vacío")</script>';
        } else {
            $file_open = fopen("hoteles.csv", "a");
            $no_rows = count(file("hoteles.csv"));
            if ($no_rows > 1) {
                $no_rows = ($no_rows - 1) + 1;
            }
            $form_data = array(
                'Nombre' => $nombre,
                'Categoría' => $cat,
                'Habitaciones' => $hab,
                'Población' => $poblacion,
                'Dirección' => $direccion
            );
            fputcsv($file_open, $form_data);
            $nombre = '';
            $cat = '';
            $hab = '';
            $poblacion = '';
            $direccion = '';
        }
    }

    ?>
</body>

</html>