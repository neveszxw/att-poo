<?php

class Pessoa
{
    public function __construct(
        public string $nome,
        public int $idade
    ) {}

    public function apresentar()
    {
        echo "Nome: {$this->nome}\n";
        echo "Idade: {$this->idade}\n";
    }
}

class Aluno extends Pessoa
{
    public function __construct(string $nome, int $idade, private string $matricula)
    {
        parent::__construct($nome, $idade);
    }

    public function exibirCadastro()
    {
        $this->apresentar();
        echo "Matrícula: {$this->matricula}\n";
    }
}

$aluno = new Aluno("Mariana", 17, "2026001");
$aluno->exibirCadastro();
