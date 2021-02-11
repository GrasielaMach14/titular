<?php

require_once 'autoload.php';

use pooPhp\phpOo\Modelo\Funcionario\{Diretor, Gestor, Desenvolvedor};
use pooPhp\phpOo\Modelo\{CPF, Endereco};
use pooPhp\phpOo\Modelo\Conta\Titular;
use pooPhp\phpOo\Service\Autenticador;

$diretor = new Diretor('Alessandro', new CPF('019.299.918-28'), 40000);

$gestor = new Gestor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$titular = new Titular(
    'João da Silva',
    new CPF(
        '123.456.789-10'),    
    new Endereco(
        '',
        '',
        '',
        '')
);

$logar = new Autenticador();

$logar->login($diretor, '4321');