<?php
interface formaGeometrica {
    public function calcularArea();
    public function calcularPerimetro();
}
class retangulo implements formaGeometrica {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return "A Area do retangulo " .  ($this->largura * $this->altura) . PHP_EOL;
    }

    public function calcularPerimetro() {
        return "O perimetro do retangulo " . 2 * ($this->largura + $this->altura) . PHP_EOL;
    }
}

class circulo implements formaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return "A area do Circulo é: " . pi() * pow($this->raio, 2) . PHP_EOL;
    }

    public function calcularPerimetro() {
        return "A area do Circulo é: " . 2 * pi() * $this->raio . PHP_EOL;
    }
}
?>
