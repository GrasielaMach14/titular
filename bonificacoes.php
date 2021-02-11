<?php

require_once 'autoload.php';

use pooPhp\phpOo\Modelo\Funcionario\{Diretor, Gestor, Desenvolvedor};
use pooPhp\phpOo\Modelo\CPF;
use pooPhp\phpOo\Service\ControladorBonificacoes;

$func1 = new Diretor('Clarice',
            new CPF('011.222.888-00'), 
            10000
        );

$func2 = new Gestor('Diana',
        new CPF('099.122.888-01'), 
        3000
    );

$func3 = new Desenvolvedor('Jorge',
        new CPF('100.200.100-99'),
        2000
    );   

$func3->promover();

$controlador = new ControladorBonificacoes();
$controlador->addBonificacao($func1);
$controlador->addBonificacao($func2);
$controlador->addBonificacao($func3);

echo 'R$ '.$controlador->retornarTotal(). PHP_EOL;