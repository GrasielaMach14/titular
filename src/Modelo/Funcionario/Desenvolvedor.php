<?php

namespace pooPhp\phpOo\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function promover()
    {
        $this->receberAumento($this->retornaSalario() * 0.75);
    }

    public function calculaBonificacao() : float 
    {
        return 500.0;
    }
}