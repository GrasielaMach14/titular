<?php

namespace pooPhp\phpOo\Modelo\Conta;

use pooPhp\phpOo\Modelo\Pessoa;
use pooPhp\phpOo\Modelo\CPF;
use pooPhp\phpOo\Modelo\Endereco;
use pooPhp\phpOo\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        /* Serve p executar o construtor da classe pai */
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): string
    {
        return $this->endereco;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
