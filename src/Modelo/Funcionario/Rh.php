<?php

namespace pooPhp\phpOo\Modelo\Funcionario;

class Rh extends Funcionario
{
    public function calculaBonificacao() : float 
    {
        return 600;
    }
}