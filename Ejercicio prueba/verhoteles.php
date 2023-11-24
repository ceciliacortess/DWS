<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver hoteles</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<img src="listadohoteles.png">
    <?php
    $hoteles = [
        ['nombre' => 'Abashiri (NH)', 'cat' => '3*', 'hab' => 168, 'poblacion' => '46013 Valencia', 'direccion' => 'Avenida Ausias March, 59'],
        ['nombre' => 'Abba Acteon (Abba Hoteles)', 'cat' => '4*', 'hab' => 189, 'poblacion' => '46023 Valencia', 'direccion' => 'Escultor Vicente Bertrán Grimal, 2'],
        ['nombre' => 'Acta Atarazanas', 'cat' => '4*', 'hab' => 42, 'poblacion' => '46011 Valencia', 'direccion' => 'Plaza Tribunal de las Aguas, 4'],
        ['nombre' => 'Acta del Carmen', 'cat' => '3*', 'hab' => 25, 'poblacion' => '46003 Valencia', 'direccion' => 'Blanquerías, 11'],
        ['nombre' => 'AC Valencia (AC Hotels)', 'cat' => '4*', 'hab' => 183, 'poblacion' => '46023 Valencia', 'direccion' => 'Avenida de Francia, 67'],
        ['nombre' => 'Ad Hoc Monumental Valencia', 'cat' => '3*', 'hab' => 28, 'poblacion' => '46003 Valencia', 'direccion' => 'Boix, 4'],
        ['nombre' => 'Alkazar', 'cat' => '1*', 'hab' => 18, 'poblacion' => '46002 Valencia', 'direccion' => 'Mosén Femades, 11'],
    ];

    echo "<table>";
    echo "<thead class='table-light'><th>Nombre</th><th>Categoría</th><th>Habitaciones</th><th>Población</th><th>Dirección</th></thead>";

    foreach ($hoteles as $hotel) {
        echo "<tbody>";
        echo "<td>" . $hotel['nombre'] . "</td>";
        echo "<td>" . $hotel['cat'] . "</td>";
        echo "<td>" . $hotel['hab'] . "</td>";
        echo "<td>" . $hotel['poblacion'] . "</td>";
        echo "<td>" . $hotel['direccion'] . "</td>";
        echo "</tbody>";
    }

    echo "</table>";
    ?>

    <a href="ejercicioprueba.html"><button>Volver</button></a>
</body>

</html>