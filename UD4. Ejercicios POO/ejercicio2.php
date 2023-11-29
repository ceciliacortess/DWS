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

    public function getSueldo() {
        return $this->sueldo;
    }
}

$empleado = new Empleado("Cecilia", 60000);

echo "<h1>Ejercicio 2</h1>";
echo $empleado->getNombre() . " tiene un sueldo de " . $empleado->getSueldo() . " €<br>";
?>
