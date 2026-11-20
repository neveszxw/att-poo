<?php

class Animal
{
    private int $idade = 0;

    public function __construct(private string $nome, int $idade)
    {
        $this->setIdade($idade);
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        if ($idade < 0) {
            echo "A idade não pode ser negativa.\n";
            return;
        }

        $this->idade = $idade;
    }

    public function apresentar()
    {
        echo "{$this->nome} ({$this->getIdade()} anos): ";
        $this->fazerBarulho();
    }

    public function fazerBarulho() {}
}

class Cachorro extends Animal
{
    public function fazerBarulho()
    {
        echo "Au au!\n";
    }
}

class Gato extends Animal
{
    public function fazerBarulho()
    {
        echo "Miau!\n";
    }
}

class Passaro extends Animal
{
    public function fazerBarulho()
    {
        echo "Piu piu!\n";
    }
}

$animais = [new Cachorro("Rex", 4), new Gato("Mimi", 2), new Passaro("Loro", 1)];
$animais[0]->apresentar();
$animais[1]->apresentar();
$animais[2]->apresentar();
