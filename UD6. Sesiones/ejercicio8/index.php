<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Cookies</h1>
    <?php
    $cookieName = "cookie_consent";
    $cookieValue = "accepted";

    if (!isset($_COOKIE[$cookieName]) || $_COOKIE[$cookieName] !== $cookieValue) {
        echo '<div id="cookie-banner">
            <p>¿Aceptas nuestras cookies?</p>
            <button onclick="aceptarCookies()"><a href="pagina.php">Aceptar</a></button>
          </div>';
    }
    ?>

    <script>
        function aceptarCookies() {
            var d = new Date();
            d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000)); // Caduca en 1 año
            var expires = "expires=" + d.toUTCString();
            document.cookie = "cookie_consent=accepted;" + expires + ";path=/";

            document.getElementById("cookie-banner").style.display = "none";
        }
    </script>
</body>

</html>