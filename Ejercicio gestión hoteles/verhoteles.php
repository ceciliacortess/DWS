<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver hoteles</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<img src="listadohoteles.png">
<a href="ejercicioprueba.html"><button>Volver</button></a>
<?php
    echo "<table class='tablaVer'>";
    $start_row = 1;
    if (($csv_file = fopen("hoteles.csv", "r")) !== FALSE) {
        while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
            $colum_count = count($read_data);
            if ($start_row === 1) {
                echo '<thead><tr>';
            } else {
                echo '<tr>';
            }
            for ($c = 0; $c < $colum_count; $c++) {
                if ($start_row === 1) {
                    echo '<th>' . $read_data[$c] . '</th>';
                } else {
                    echo '<td>' . $read_data[$c] . '</td>';
                }
            }
            if ($start_row === 1) {
                echo '</tr></thead><tbody>';
            } else {
                echo '</tr>';
            }

            $start_row++;
        }
        fclose($csv_file);
        echo '</tbody></table>';
    }
    ?>
</body>

</html>