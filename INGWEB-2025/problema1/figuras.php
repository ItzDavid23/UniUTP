<?php
interface FiguraGeometrica {
    public function calcularArea();
    public function calcularPerimetro();
}

abstract class Figura implements FiguraGeometrica {
    protected string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}

class Rectangulo extends Figura {
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura) {
        parent::__construct("Rectángulo");
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro(): float {
        return 2 * ($this->base + $this->altura);
    }
}

class Triangulo extends Figura {
    private float $base;
    private float $altura;
    private float $lado1;
    private float $lado2;
    private float $lado3;

    public function __construct(float $base, float $altura, float $lado1, float $lado2, float $lado3) {
        parent::__construct("Triángulo");
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function calcularArea(): float {
        return ($this->base * $this->altura) / 2;
    }

    public function calcularPerimetro(): float {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
}

class Circulo extends Figura {
    private float $radio;

    public function __construct(float $radio) {
        parent::__construct("Círculo");
        $this->radio = $radio;
    }

    public function calcularArea(): float {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro(): float {
        return 2 * pi() * $this->radio;
    }
}
