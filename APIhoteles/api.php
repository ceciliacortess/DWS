<?php
$servername = "localhost";
$username = "Cecilia";
$password = "Cecilia";
$dbname = "hoteles";

function obtenerHoteles() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "message" => "La conexión a la base de datos ha fallado"]));
    }
    $sql = "SELECT * FROM hoteles";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $hoteles = [];
        while ($row = $result->fetch_assoc()) {
            $hoteles[] = $row;
        }
        $conn->close();
        echo json_encode(["success" => true, "hoteles" => $hoteles], JSON_PRETTY_PRINT);
    } else {
        $conn->close();
        echo json_encode(["success" => false, "message" => "No se encontraron los hoteles"]);
    }
}

function obtenerHotelId($id) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "message" => "La conexión a la base de datos ha fallado"]));
    }
    $sql = "SELECT * FROM hoteles WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $conn->close();
        echo json_encode(["success" => true, "hotel" => $row], JSON_PRETTY_PRINT);
    } else {
        $conn->close();
        echo json_encode(["success" => false, "message" => "Hotel no encontrado"]);
    }
}

function insertarHotel($datosHotel) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "message" => "La conexión a la base de datos ha fallado"]));
    }
    
    $nombre = $datosHotel['nombre'] ?? '';
    $cat = $datosHotel['cat'] ?? '';
    $hab = $datosHotel['hab'] ?? '';
    $poblacion = $datosHotel['poblacion'] ?? '';
    $direccion = $datosHotel['direccion'] ?? '';
    
    $sql = "INSERT INTO hoteles (Nombre, Categoria, Habitaciones, Poblacion, Direccion)
    VALUES ('$nombre', '$cat', '$hab', '$poblacion', '$direccion')";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo json_encode(["success" => true, "message" => "Hotel insertado correctamente"]);
    } else {
        $conn->close();
        echo json_encode(["success" => false, "message" => "Error al insertar el hotel: " . $conn->error]);
    }
}

function modificarHotel($id, $datosHotel) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "message" => "La conexión a la base de datos ha fallado"]));
    }

    $nombre = $datosHotel['nombre'] ?? '';
    $cat = $datosHotel['cat'] ?? '';
    $hab = $datosHotel['hab'] ?? '';
    $poblacion = $datosHotel['poblacion'] ?? '';
    $direccion = $datosHotel['direccion'] ?? '';
    
    $sql = "UPDATE hoteles SET nombre='$nombre', cat= '$cat', hab= '$hab', poblacion= '$poblacion', direccion='$direccion' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo json_encode(["success" => true, "message" => "Hotel modificado correctamente"]);
    } else {
        $conn->close();
        echo json_encode(["success" => false, "message" => "Error al modificar el hotel: " . $conn->error]);
    }
}

function eliminarHotel($id) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "message" => "La conexión a la base de datos ha fallado"]));
    }

    $sql = "DELETE FROM hoteles WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        echo json_encode(["success" => true, "message" => "Hotel eliminado correctamente"]);
    } else {
        $conn->close();
        echo json_encode(["success" => false, "message" => "Error al eliminar el hotel: " . $conn->error]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $hotelId = $_GET['id'] ?? null;
    if (!empty($hotelId)) {
        obtenerHotelId($hotelId);
    } else {
        obtenerHoteles();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datosHotel = json_decode(file_get_contents("php://input"), true);
    insertarHotel($datosHotel);
} elseif ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $hotelId = $_GET['id'] ?? null;
    $datosHotel = json_decode(file_get_contents("php://input"), true);
    
    if (!empty($hotelId)) {
        modificarHotel($hotelId, $datosHotel);
    } else {
        echo json_encode(["success" => false, "message" => "ID del hotel no proporcionado"]);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $hotelId = $_GET['id'] ?? null;
    
    if (!empty($hotelId)) {
        eliminarHotel($hotelId);
    } else {
        echo json_encode(["success" => false, "message" => "ID del hotel no proporcionado"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Método no permitido"]);
}
?>
