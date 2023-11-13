<?php
$nombre = "Cecilia";
$edad = 19;
if ($nombre == null) {
    echo "Hola desconocido.";
}elseif ($nombre!=null && $edad==null){
    echo "Hola " . $nombre . ", no sé tu edad.";
}elseif ($nombre!=null && $edad!=null){
    echo "Hola " . $nombre . ", tienes " . $edad . " años.";
}else{
    echo "Valores incorrectos";
}
?>