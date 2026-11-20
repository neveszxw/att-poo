<?php

class ContaBancaria
{
    private float $saldo;

    public function __construct(float $saldoInicial = 0)
    {
        $this->saldo = max(0, $saldoInicial);
    }

    public function depositar(float $valor)
    {
        if ($valor <= 0) {
            echo "O depósito deve ser maior que zero.\n";
            return;
        }

        $this->saldo += $valor;
    }

    public function sacar(float $valor)
    {
        if ($valor <= 0 || $valor > $this->saldo) {
            echo "Saque inválido ou saldo insuficiente.\n";
            return;
        }

        $this->saldo -= $valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}

$conta = new ContaBancaria(100);
$conta->depositar(50);
$conta->sacar(30);
echo "Saldo: R$ " . number_format($conta->consultarSaldo(), 2, ',', '.') . "\n";
