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

    public function pagarImpuestos() {
        $impuestos = $this->sueldo > 1200;
        echo $impuestos ? $this->nombre . " tiene que pagar impuestos." : $this->nombre . " no tiene que pagar impuestos.<br>";
    }
}

$empleado = new Empleado("Cecilia", 60000);

echo "<h1>Ejercicio 3</h1>";
echo $empleado->getNombre() . " tiene un sueldo de " . $empleado->getSueldo() . " €<br>";
$empleado->pagarImpuestos();
?>
