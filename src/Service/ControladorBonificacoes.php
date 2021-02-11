<?php

namespace pooPhp\phpOo\Service;

use pooPhp\phpOo\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes
{
    private $totalBonificacoes = 0;

    public function addBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function retornarTotal() : float
    {
        return $this->totalBonificacoes;
    }

}