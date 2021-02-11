<?php

namespace pooPhp\phpOo\Modelo\Funcionario;

use pooPhp\phpOo\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->retornaSalario() * 2;
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}