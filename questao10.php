<?php

class Usuario
{
    private string $senha = '';

    public function __construct(public string $nome, string $senha)
    {
        $this->setSenha($senha);
    }

    public function setSenha(string $senha)
    {
        if (strlen($senha) < 6) {
            echo "A senha deve ter pelo menos 6 caracteres.\n";
            return;
        }

        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function verificarSenha(string $senha): bool
    {
        return password_verify($senha, $this->senha);
    }

    public function listarPermissoes(): array
    {
        return [];
    }
}

class Admin extends Usuario
{
    public function listarPermissoes(): array
    {
        return ["gerenciar usuários", "editar conteúdo", "visualizar dados"];
    }
}

class Cliente extends Usuario
{
    public function listarPermissoes(): array
    {
        return ["visualizar conteúdo", "editar próprio perfil"];
    }
}

$admin = new Admin("Carlos", "admin123");
$cliente = new Cliente("Luiza", "cliente123");
echo "Permissões de {$admin->getNome()}: " . implode(", ", $admin->listarPermissoes()) . "\n";
echo "Permissões de {$cliente->getNome()}: " . implode(", ", $cliente->listarPermissoes()) . "\n";
echo "Senha do admin correta? " . ($admin->verificarSenha("admin123") ? "Sim" : "Não") . "\n";
