<?php

require_once 'autoload.php';

use pooPhp\phpOo\Modelo\Conta\{ContaCorrente, Conta};
use pooPhp\phpOo\Modelo\Conta\Titular;
use pooPhp\phpOo\Modelo\CPF;
use pooPhp\phpOo\Modelo\Endereco;

$titular1 = new Titular('Grasiela', new CPF('123.564.000-11'), new Endereco('','','',''));
$titular2 = new Titular('Sandrini', new CPF('182.837.222-11'), new Endereco('','','',''));
$titular3 = new Titular('Pedro', new CPF('111.111.111-11'), new Endereco('','','',''));

$conta1 = new ContaCorrente($titular1);
$conta2 = new ContaCorrente($titular2);
$conta3 = new ContaCorrente($titular3);

$conta1->depositar(10000);
$conta1->sacar(690);

$conta2->depositar(12000);
$conta2->sacar(690);

$conta3->depositar(10600);
$conta3->sacar(690);

$contasCorrentes = [$conta1, $conta2, $conta3];

/*echo 'Saldo: R$ ';
echo $conta1->recuperarSaldo(). PHP_EOL; 
echo $conta2->recuperarNome(). PHP_EOL;
echo $conta2->recuperarCpf(). PHP_EOL;
echo Conta::recuperarQtdContas($conta2). PHP_EOL;
unset($conta1); */
//var_dump($conta2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco IMEB</title>
</head>
<body>
    <hr>
    <h1>Conta Corrente</h1>
    <hr>
    <dl>
        <?php foreach ($contasCorrentes as $conta) 
        {
        ?>
        <dt>
            <h3><?= $conta->retornarNome(); ?></h3>
        </dt>
        <dt><?= "CPF: ". $conta->retornarCpf(); ?></dt>
        <dt><?= "Saldo: R$" .$conta->recuperarSaldo(); ?></dt>
        <?php 
        } ?>
    </dl>
</body>
</html>