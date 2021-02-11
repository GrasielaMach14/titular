<?php

namespace pooPhp\phpOo\Modelo\Conta;

class ContaCorrente extends Conta {

    protected function percentualTarifa(): float {
        return 0.05;
    }

    public function transferir(float $transferirValor, Conta $contaDestino) : void {
        if ($transferirValor > $this->saldo) {
            echo "Valor insuficiente para transferência.";
            return;
        }
            $this->sacar($transferirValor);           
            $contaDestino->depositar($transferirValor);
    }

}