<?php

abstract class Trabajador {
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    abstract public function calcularSueldo($parametro);
}

class Empleado extends Trabajador {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }

    public function calcularSueldo($horasTrabajadas) {
        $this->sueldo = $horasTrabajadas * 9.50;
        return $this->sueldo;
    }
}

class Gerente extends Trabajador {
    private $sueldoBase = 2500;
    private $porcentajeBeneficio;

    public function __construct($nombre, $porcentajeBeneficio) {
        parent::__construct($nombre);
        $this->porcentajeBeneficio = $porcentajeBeneficio;
    }

    public function calcularSueldo($beneficioEmpresa) {
        $this->sueldo = $this->sueldoBase + ($beneficioEmpresa * $this->porcentajeBeneficio / 100);
        return $this->sueldo;
    }
}

echo "<h1>Ejercicio 8</h1>";

$empleado = new Empleado("Carlos");
$sueldoEmpleado = $empleado->calcularSueldo(40);
echo "El sueldo de " . $empleado->getNombre() . " es: $sueldoEmpleado <br>";

$gerente = new Gerente("Cecilia", 5); 
$sueldoGerente = $gerente->calcularSueldo(50000);
echo "El sueldo de " . $gerente->getNombre() . " es: $sueldoGerente <br>";
?>
