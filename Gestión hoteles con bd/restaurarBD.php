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

// Inicializar la variable de mensaje
$mensaje = '';

// Script SQL
$sql = "
    DROP TABLE IF EXISTS hoteles;

    CREATE TABLE hoteles (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(255) NOT NULL,
        Categoria VARCHAR(10) NOT NULL,
        Habitaciones INT NOT NULL,
        Poblacion VARCHAR(255) NOT NULL,
        Direccion VARCHAR(255) NOT NULL,
        UNIQUE(ID)
    );
    
    INSERT INTO hoteles (Nombre, Categoria, Habitaciones, Poblacion, Direccion)
    VALUES 
      ('Abashiri (NH)', '3*', 168, '46013 Valencia', 'Avenida Ausias March; 59'),
      ('Abba Acteon (Abba Hoteles)', '4*', 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal; 2'),
      ('Acta Atarazanas', '4*', 42, '46011 Valencia', 'Plaza Tribunal de las Aguas; 4'),
      ('Acta del Carmen', '3*', 25, '46003 Valencia', 'Blanquerías; 11'),
      ('AC Valencia (AC Hotels)', '4*', 183, '46023 Valencia', 'Avenida de Francia; 67'),
      ('Ad Hoc Monumental Valencia', '3*', 28, '46003 Valencia', 'Boix; 4'),
      ('Alkazar', '1*', 18, '46002 Valencia', 'Mosén Femades; 11');
";

// Ejecutar script
if ($conn->multi_query($sql) === TRUE) {
    $mensaje = "Base de datos restaurada correctamente";
} else {
    $mensaje = "Error al restaurar la base de datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restaurar base de datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <?php ?>
    <br><br>
    <img src="img/gestiondehoteles.png">
    <label><?php echo $mensaje; ?></label><br><br>
    <a href="ejercicioprueba.html"><button>Volver</button></a>
    <br><br>
</body>

</html>
