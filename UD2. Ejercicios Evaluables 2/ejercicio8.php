<?php
$alumnos = [
    ['edad' => 16, 'estatura' => 1.80],
    ['edad' => 22, 'estatura' => 1.70],
    ['edad' => 17, 'estatura' => 1.85],
    ['edad' => 19, 'estatura' => 1.78],
    ['edad' => 21, 'estatura' => 1.76],
];

$sumaEdades = 0;
$sumaEstaturas = 0;
$mayoresDe18 = 0;
$altos = 0;

foreach ($alumnos as $alumno) {
    $edad = $alumno['edad'];
    $estatura = $alumno['estatura'];

    $sumaEdades += $edad;
    $sumaEstaturas += $estatura;

    if ($edad > 18) {
        $mayoresDe18++;
    }

    if ($estatura > 1.75) {
        $altos++;
    }
}

$mediaEdades = $sumaEdades / count($alumnos);
$mediaEstaturas = $sumaEstaturas / count($alumnos);

echo "La edad media es $mediaEdades años<br>";
echo "La estatura media es $mediaEstaturas m<br>";
echo "Hay $mayoresDe18 alumnos mayores de 18 años<br>";
echo "Hay $altos alumnos que miden más de 1.75<br>";
?>