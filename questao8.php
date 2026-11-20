<?php

class Funcionario
{
    public function __construct(public string $nome, public float $salario) {}

    public function getNome(): string
    {
        return $this->nome;
    }

    public function calcularBonus(): float
    {
        return 0;
    }
}

class Vendedor extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario
{
    public function calcularBonus(): float
    {
        return $this->salario * 0.20;
    }
}

$funcionarios = [new Vendedor("João", 3000), new Gerente("Ana", 6000)];
echo "Bônus de {$funcionarios[0]->getNome()}: R$ "
    . number_format($funcionarios[0]->calcularBonus(), 2, ',', '.') . "\n";
echo "Bônus de {$funcionarios[1]->getNome()}: R$ "
    . number_format($funcionarios[1]->calcularBonus(), 2, ',', '.') . "\n";
