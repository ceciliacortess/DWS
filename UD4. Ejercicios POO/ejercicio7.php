<?php
class Mamifero {
    protected $especie;
    protected $sonido;
    protected $familia;

    public function __construct($especie, $sonido) {
        $this->especie = $especie;
        $this->sonido = $sonido;
    }

    public function sonido() {
        echo "Sonido de {$this->especie}, de la familia {$this->familia}: {$this->sonido}<br>";
    }
}

class Perro extends Mamifero {
    public function __construct() {
        parent::__construct("perro", "ladra");
        $this->familia = "cánidos";
    }
}

class Gato extends Mamifero {
    public function __construct() {
        parent::__construct("gato", "maulla");
        $this->familia = "felinos";
    }
}

$perro = new Perro();
$gato = new Gato();

echo "<h1>Ejercicio 7</h1>";
$perro->sonido();
$gato->sonido();
?>
