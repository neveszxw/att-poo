<?php

class Funcionario
{
    private float $salario = 0;

    public function __construct(float $salario)
    {
        $this->setSalario($salario);
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario)
    {
        if ($salario < 0) {
            echo "O salário não pode ser negativo.\n";
            return;
        }

        $this->salario = $salario;
    }
}

$funcionario = new Funcionario(2500);
echo "Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
$funcionario->setSalario(2800);
echo "Novo salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . "\n";
