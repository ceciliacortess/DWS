<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $selectedColor = $_POST['selectedColor'];
        setcookie('backgroundColor', $selectedColor, time() + (86400 * 1), "/");
        header('Location: colorPage.php');
        exit();
    } elseif (isset($_POST['delete'])) {
        setcookie('backgroundColor', '', time() - 3600, "/");
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Color Seleccionado</title>
</head>
<body>
    <?php
    $backgroundColor = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : '';
    
    if ($backgroundColor) {
        echo '<div style="background-color:' . $backgroundColor . '; height: 100vh; width: 100%;">';
        echo '<h1>Color seleccionado: ' . $backgroundColor . '</h1>';
        echo '<button><a href="index.php">Volver a la página inicial</a></button>';
        echo '</div>';
    } else {
        echo '<p>No se ha seleccionado ningún color.</p>'; 
        echo '<button><a href="index.php">Volver a la página inicial</a></button>';
    }
    ?>
    <script src="script.js"></script>
</body>
</html>

