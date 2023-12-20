<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Borrar Hotel</title>
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
    $id_to_delete = '';
    $mensaje = '';

    if (isset($_POST['delete'])) {
        $id_to_delete = $_POST['id_to_delete'];

        // Verificar que el ID existe antes de eliminar
        $check_sql = "SELECT * FROM hoteles WHERE ID = $id_to_delete";
        $result_check = $conn->query($check_sql);

        if ($result_check->num_rows > 0) {
            // Realizar la eliminación
            $delete_sql = "DELETE FROM hoteles WHERE ID = $id_to_delete";

            if ($conn->query($delete_sql) === TRUE) {
                $mensaje = "Hotel eliminado correctamente";
            } else {
                $mensaje = "Error al eliminar el hotel: " . $conn->error;
            }
        } else {
            $mensaje = "No existe un hotel con ese ID";
        }
    }

    // Cerrar conexión
    $conn->close();
    ?>
    <img src="img/borrarhoteles.png">
    <label><?php echo $mensaje; ?></label>
    <form method="POST">
        <label for="id_to_delete">ID del Hotel a Borrar:</label>
        <input type="number" id="id_to_delete" name="id_to_delete" required><br><br>
        <input type="submit" name="delete" value="Borrar">
        <br><br>
    </form>
     <a href="ejercicioprueba.html"><button>Volver</button></a>
    <br><br>
</body>

</html>

