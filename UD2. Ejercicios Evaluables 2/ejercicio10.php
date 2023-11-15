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

echo "<h1>Listado de todos los hoteles </h1>";
foreach ($hoteles as $hotel) {
    echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
        ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
        . ", dirección: " . $hotel['direccion'] . "<br><br>";
}

echo "<h1>Listado de los hoteles de más de 100 habitaciones</h1>";
foreach ($hoteles as $hotel) {
    if ($hotel['hab'] > 100) {
        echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
            ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
            . ", dirección: " . $hotel['direccion'] . "<br><br>";
    }
}

echo "<h1>Listado de los hoteles de menos de 100 habitaciones y 3 estrellas</h1>";
foreach ($hoteles as $hotel) {
    if ($hotel['hab'] < 100 && $hotel['cat'] == "3*") {
        echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
            ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
            . ", dirección: " . $hotel['direccion'] . "<br><br>";
    }
}

unset($hoteles[3]);
echo "<h1>Listado de todos los hoteles después de eliminar Acta del Carmen</h1>";
foreach ($hoteles as $hotel) {
    echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
        ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
        . ", dirección: " . $hotel['direccion'] . "<br><br>";
}

foreach ($hoteles as $clave => $hotel) {
    unset($hoteles[$clave]);
}
echo "<h1>Listado después de eliminar todos los hoteles</h1>";
if (empty($hoteles)) {
    echo "No hay hoteles en la base de datos";
} else {
    foreach ($hoteles as $hotel) {
        echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
            ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
            . ", dirección: " . $hotel['direccion'] . "<br><br>";
    }
}

array_push($hoteles, ['nombre' => 'Astoria Palace (Ayre Fiesta)', 'cat' => '4*', 'hab' => 204, 'poblacion' => '46002 Valencia', 'direccion' => 'Plaza Rodrigo Botet, 5']);
array_push($hoteles, ['nombre' => 'Balneario Las Arenas', 'cat' => 'Lujo', 'hab' => 253, 'poblacion' => '46011 Valencia', 'direccion' => 'Eugenia Viñes, 22-24']);
echo "<h1>Listado después de añadir hoteles</h1>";
foreach ($hoteles as $hotel) {
    echo "Nombre: " . $hotel['nombre'] . ", categoria: " . $hotel['cat'] .
        ", habitaciones: " . $hotel['hab'] . ", población: " . $hotel['poblacion']
        . ", dirección: " . $hotel['direccion'] . "<br><br>";
}
?>