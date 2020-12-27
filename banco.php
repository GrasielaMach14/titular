<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$titular1 = new Titular('Grasiela', new CPF('123.564.000-11'));
$titular2 = new Titular('Sandrini', new CPF('182.837.222-11'));
$titular3 = new Titular('Pedro', new CPF('111.111.111-11'));

$conta1 = new Conta($titular1);
$conta2 = new Conta($titular2);
$conta3 = new Conta($titular3);

$conta2->depositar(10000);
$conta2->sacar(690);
echo 'Saldo: R$ ';
echo $conta2->recuperarSaldo(). PHP_EOL; 
echo $conta2->recuperarNome(). PHP_EOL;
echo $conta2->recuperarCpf(). PHP_EOL;
echo Conta::recuperarQtdContas($conta2). PHP_EOL;
unset($conta1);
//var_dump($conta2);