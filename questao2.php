<?php

class Produto
{
    public function __construct(
        private string $nome,
        private float $preco
    ) {}

    public function aplicarDesconto(float $porcentagem)
    {
        if ($porcentagem < 0 || $porcentagem > 100) {
            echo "Desconto inválido.\n";
            return;
        }

        $this->preco -= $this->preco * ($porcentagem / 100);
    }

    public function exibir()
    {
        echo "Produto: {$this->nome}\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
    }
}

$produto = new Produto("Caderno", 25.00);
$produto->exibir();
$produto->aplicarDesconto(10);
$produto->exibir();
