<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password = isset($_POST['pasword']) ? $_POST['pasword'] : '';
    $confpassword = isset($_POST['confpasword']) ? $_POST['confpasword'] : '';
    $bloqueado = isset($_POST['bloqueado']) ? $_POST['bloqueado'] : '';
    $departamento = isset($_POST['departamento']) ? $_POST['departamento'] : [];

    // Comprobar si los campos están vacíos
    if (empty($nombre) || empty($email) || empty($usuario) || empty($password) || empty($confpassword) || empty($bloqueado) || empty($departamento)) {
        return '<p>Uno o más campos están vacíos. Por favor, completa todos los campos.</p>';
    } else {
        // Construir y devolver los resultados
        echo '<p><strong>Nombre y apellidos:</strong> ' . htmlspecialchars($nombre) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
        echo '<p><strong>Nombre de usuario:</strong> ' . htmlspecialchars($usuario) . '</p>';
        echo '<p><strong>Contraseña:</strong> ' . htmlspecialchars($password) . '</p>';
        echo '<p><strong>Confirmar contraseña:</strong> ' . htmlspecialchars($confpassword) . '</p>';
        echo '<p><strong>Bloqueado:</strong> ' . htmlspecialchars($bloqueado) . '</p>';
        echo '<p><strong>Departamento:</strong> ' . implode(', ', $departamento) . '</p>';
    }
}

if (isset($_POST['subir'])) {
    //Recogemos el archivo enviado por el formulario
    $archivo = $_FILES['archivo']['name'];
    //Si el archivo contiene algo y es diferente de vacio
    if (isset($archivo) && $archivo != "") {
       //Obtenemos algunos datos necesarios sobre el archivo
       $tipo = $_FILES['archivo']['type'];
       $tamano = $_FILES['archivo']['size'];
       $temp = $_FILES['archivo']['tmp_name'];
       //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
         echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
      }
      else {
         //Si la imagen es correcta en tamaño y tipo
         //Se intenta subir al servidor
         if (move_uploaded_file($temp, 'images/'.$archivo)) {
             //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
             chmod('images/'.$archivo, 0777);
             //Mostramos el mensaje de que se ha subido co éxito
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             //Mostramos la imagen subida
             echo '<p><img src="images/'.$archivo.'"></p>';
         }
         else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
         }
       }
    }
 }

?>