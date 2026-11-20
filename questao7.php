<?php

class Forma
{
    public function calcularArea(): float
    {
        return 0;
    }
}

class Retangulo extends Forma
{
    public function __construct(private float $largura, private float $altura) {}

    public function calcularArea(): float
    {
        return $this->largura * $this->altura;
    }
}

class Circulo extends Forma
{
    public function __construct(private float $raio) {}

    public function calcularArea(): float
    {
        return pi() * $this->raio ** 2;
    }
}

$formas = [new Retangulo(5, 3), new Circulo(2)];
echo "Área do retângulo: " . number_format($formas[0]->calcularArea(), 2, ',', '.') . "\n";
echo "Área do círculo: " . number_format($formas[1]->calcularArea(), 2, ',', '.') . "\n";
