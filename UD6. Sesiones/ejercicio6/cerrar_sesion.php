<?php
// Eliminar la cookie de sesión
setcookie('sesion_valida', '', time() - 3600);

// Redireccionar a la página de inicio de sesión
header("Location: index.php");
exit();
?>
