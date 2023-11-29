<?php
class Empleado {
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($nuevoSueldo) {
        $this->sueldo = $nuevoSueldo;
    }
}

$empleado1 = new Empleado("Carlos", 50000);
$empleado2 = new Empleado("Cecilia", 60000);

echo "<h1>Ejercicio 1</h1>";
echo $empleado1->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . " €<br>";
echo $empleado2->getNombre() . " tiene un sueldo de " . $empleado2->getSueldo() . " €<br>";
?>
