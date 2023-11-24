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
    $start_row=1;
    if(($csv_file = fopen("hoteles.csv","r")) !== FALSE){
        while(($read_data = fgetcsv($csv_file, 1000, ";"))!== FALSE){
            $colum_count = count($read_data);
            echo '<tr>';
            $start_row++;
            for($c=0;$c<$colum_count;$c++){
                echo '<td>' . $read_data[$c] . '</td>';
            }
            echo '</tr>';
        }
        fclose($csv_file);
    }
    echo "</table>";
    ?>

    
</body>

</html>