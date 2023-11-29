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
        return $this->sueldo > 1200;
    }

    public function mostrarImpuestos() {
        echo $this->pagarImpuestos() ? $this->nombre . " tiene que pagar impuestos." : $this->nombre . " no tiene que pagar impuestos.<br>";
    }
}

$empleado = new Empleado("Cecilia", 60000);

echo "<h1>Ejercicio 4</h1>";
echo $empleado->getNombre() . " tiene un sueldo de " . $empleado->getSueldo() . " €<br>";
$empleado->mostrarImpuestos();
?>
