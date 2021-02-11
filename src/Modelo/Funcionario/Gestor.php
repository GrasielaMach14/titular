<?php

namespace pooPhp\phpOo\Modelo\Funcionario;

use pooPhp\phpOo\Modelo\Autenticavel;

class Gestor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao() : float 
    {
        return $this->retornaSalario();
    }

    public function autenticar(string $senha): bool
    {
        return $senha === '4321';
    }

}