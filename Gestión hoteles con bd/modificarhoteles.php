<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Hotel</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "Cecilia";
    $password = "Cecilia";
    $dbname = "hoteles";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Inicializar variables
    $id_to_modify = '';
    $nombre = '';
    $categoria = '';
    $habitaciones = '';
    $poblacion = '';
    $direccion = '';
    $mensaje = '';

    if (isset($_POST['modify'])) {
        $id_to_modify = $_POST['id_to_modify'];

        // Obtener datos actuales del hotel
        $select_sql = "SELECT * FROM hoteles WHERE ID = $id_to_modify";
        $result_select = $conn->query($select_sql);

        if ($result_select->num_rows > 0) {
            $row = $result_select->fetch_assoc();
            $nombre = $row['Nombre'];
            $categoria = $row['Categoria'];
            $habitaciones = $row['Habitaciones'];
            $poblacion = $row['Poblacion'];
            $direccion = $row['Direccion'];
        } else {
            $mensaje = "No existe un hotel con ese ID";
        }
    }

    if (isset($_POST['update'])) {
        $id_to_modify = $_POST['id_to_modify'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $habitaciones = $_POST['habitaciones'];
        $poblacion = $_POST['poblacion'];
        $direccion = $_POST['direccion'];

        // Actualizar los datos del hotel
        $update_sql = "UPDATE hoteles SET Nombre='$nombre', Categoria='$categoria', Habitaciones=$habitaciones, Poblacion='$poblacion', Direccion='$direccion' WHERE ID=$id_to_modify";

        if ($conn->query($update_sql) === TRUE) {
            $mensaje = "Hotel modificado correctamente";
            $id_to_modify = '';
            $nombre = '';
            $categoria = '';
            $habitaciones = '';
            $poblacion = '';
            $direccion = '';
        } else {
            $mensaje = "Error al modificar el hotel: " . $conn->error;
        }
    }

    // Cerrar conexión
    $conn->close();
    ?>


    <img src="img/modificarhoteles.png">
    <label><?php echo $mensaje; ?></label>
    <br><br>
    <form method="POST">
        <label for="id_to_modify">ID del Hotel a Modificar:</label>
        <input type="number" id="id_to_modify" name="id_to_modify" required>
        <input type="submit" name="modify" value="Consultar">
    </form>

    <form method="POST">
        <table class="tablaAnyadir">
            <tr>
                <td><label for="nombre">Nombre: </label></td>
                <td><input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"></td>
            </tr>
            <tr>
                <td><label for="cat">Categoría: </label></td>
                <td><input type="text" id="cat" name="categoria" value="<?php echo $categoria; ?>"></td>
            </tr>
            <tr>
                <td><label for="hab">Habitaciones: </label></td>
                <td><input type="number" id="hab" name="habitaciones" min="0" value="<?php echo $habitaciones; ?>"></td>
            </tr>
            <tr>
                <td><label for="pob">Población: </label></td>
                <td><input type="text" id="pob" name="poblacion" value="<?php echo $poblacion; ?>"></td>
            </tr>
            <tr>
                <td><label for="dir">Dirección: </label></td>
                <td><input type="text" id="dir" name="direccion" value="<?php echo $direccion; ?>"></td>
            </tr>
        </table>
        <input type="hidden" name="id_to_modify" value="<?php echo $id_to_modify; ?>">
        <input type="submit" name="update" value="Modificar">
        <br><br>
    </form>

    <a href="ejercicioprueba.html"><button>Volver</button></a>

    <br><br>
</body>

</html>