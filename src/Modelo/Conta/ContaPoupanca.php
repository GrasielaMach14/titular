<?php

namespace pooPhp\phpOo\Modelo\Conta;

use pooPhp\phpOo\Modelo\Conta\Conta;

class ContaPoupanca extends Conta {

    public function percentualTarifa(): float {
        return 0.03;
    }
}