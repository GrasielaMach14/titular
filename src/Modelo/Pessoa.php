<?php

namespace pooPhp\phpOo\Modelo;

use pooPhp\phpOo\Modelo\CPF;

class Pessoa
{
    use AcessoPropriedade;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function retornarNome(): string
    {
        return $this->nome;
    }

    public function retornarCpf()
    {
        return $this->cpf->recuperarNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 3) {
            echo 'Campo precisa ter no mínimo 3 caracteres.';
            exit();
        }
    }
}
