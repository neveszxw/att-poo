<?php

class Veiculo
{
    public function __construct(
        public string $marca,
        public string $modelo
    ) {}

    public function exibirDados()
    {
        echo "Marca: {$this->marca}\n";
        echo "Modelo: {$this->modelo}\n";
    }
}

class Carro extends Veiculo
{
    public function __construct(string $marca, string $modelo, private int $quantidadePortas)
    {
        parent::__construct($marca, $modelo);
    }

    public function exibirDados()
    {
        parent::exibirDados();
        echo "Portas: {$this->quantidadePortas}\n";
    }
}

class Moto extends Veiculo
{
    public function __construct(string $marca, string $modelo, private int $cilindradas)
    {
        parent::__construct($marca, $modelo);
    }

    public function exibirDados()
    {
        parent::exibirDados();
        echo "Cilindradas: {$this->cilindradas} cc\n";
    }
}

$carro = new Carro("Toyota", "Corolla", 4);
$moto = new Moto("Honda", "CG 160", 160);
$carro->exibirDados();
echo "\n";
$moto->exibirDados();
