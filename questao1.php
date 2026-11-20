<?php
class Livro
{
    public function __construct(
        private string $titulo,
        private string $autor,
        private int $ano,
        private string $genero
    ) {}

    public function exibirFicha()
    {
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Ano: {$this->ano}\n";
        echo "Gênero: {$this->genero}\n";
    }
}

$livro = new Livro("Percy Jackson e o Ladrão de Raios", "Rick Riordan", 2005, "Fantasia");
$livro->exibirFicha();
