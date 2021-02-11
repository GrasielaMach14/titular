<?php

require_once 'autoload.php';

use pooPhp\phpOo\Modelo\{Endereco, CPF};
use pooPhp\phpOo\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};

$conta1 = new ContaPoupanca(
    new Titular('Dianna', 
        new CPF('091.827.222-00'), 
        new Endereco('Salvador', 'Pernambués', 'Aa', '1123')
    )
);

$conta1->depositar(5000);
$conta1->sacar(100);

echo 'Saldo: R$ '.$conta1->recuperarSaldo();
