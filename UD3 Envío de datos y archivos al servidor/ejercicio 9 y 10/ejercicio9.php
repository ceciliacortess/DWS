<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y obtener los valores de los campos
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $confpassword = isset($_POST['confpassword']) ? trim($_POST['confpassword']) : '';
    $bloqueado = isset($_POST['bloqueado']) ? trim($_POST['bloqueado']) : '';
    $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : [];

    // Validar si los campos están vacíos
    if (empty($nombre)) {
        echo '<p>ERROR: Debe introducir un nombre válido.</p>';
    }else if(empty($email)){
        echo '<p>ERROR: Debe introducir un email válido.</p>';
    }else if(empty($usuario)){
        echo '<p>ERROR: Debe introducir un usuario válido.</p>';
    }else if(empty($password)){
        echo '<p>ERROR: Debe introducir una contraseña válida.</p>';
    }else if(empty($confpassword)){
        echo '<p>ERROR: Debe introducir una confirmación de contraseña válida.</p>';
    }else if(empty($bloqueado)){
        echo '<p>ERROR: Debe escoger si está bloqueado o no.</p>';
    }else if(empty($departamento)){
        echo '<p>ERROR: Debe escoger mínimo un departamento.</p>';
    }else {
        // Validar el formato del email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<p>ERROR: La dirección de correo electrónico no es válida.</p>';
        } else {
            // Validar la contraseña y la confirmación de la contraseña
            if (strlen($password) < 8) {
                echo '<p>ERROR: La contraseña debe tener al menos 8 caracteres.</p>';
            } elseif ($password != $confpassword) {
                echo '<p>ERROR: Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</p>';
            } else {
                // Construir y devolver los resultados
                echo '<p><strong>Nombre y apellidos:</strong> ' . htmlspecialchars($nombre) . '</p>';
                echo '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
                echo '<p><strong>Nombre de usuario:</strong> ' . htmlspecialchars($usuario) . '</p>';
                echo '<p><strong>Contraseña:</strong> ' . htmlspecialchars($password) . '</p>';
                echo '<p><strong>Confirmar contraseña:</strong> ' . htmlspecialchars($confpassword) . '</p>';
                echo '<p><strong>Bloqueado:</strong> ' . htmlspecialchars($bloqueado) . '</p>';
                if (!empty($departamento)) {
                    if (is_array($departamento)) {
                        echo "<p><strong>Departamento:</strong> " . implode(", ", $departamento) . "</p>";
                    } else {
                        echo "<p><strong>Departamento:</strong> $departamento</p>";
                    }
                } else {
                    echo "<p><strong>Departamento:</strong> Sin departamento</p>";
                }
            }
        }
    }
}
?>