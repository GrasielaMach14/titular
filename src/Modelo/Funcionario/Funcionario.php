<?php

namespace pooPhp\phpOo\Modelo\Funcionario;

use pooPhp\phpOo\Modelo\Pessoa;
use pooPhp\phpOo\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        /* Serve p executar o construtor da classe pai */
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function receberAumento(float $aumento): void
    {
        if ($aumento < 0) {
            echo 'Não é permitido valor abaixo de 0.';
            return;
        }
        $this->salario += $aumento;
    }

    public function retornaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
}
