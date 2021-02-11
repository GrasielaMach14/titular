<?php

require_once 'autoload.php';

use pooPhp\phpOo\Modelo\Endereco;

$end1 = new Endereco('Fortaleza', 'Bairro A1', 'A1 aa', '123');
$end2 = new Endereco('São Luíz', 'Bairro B1', 'B1 aa', '12300');


echo $end1. PHP_EOL;
echo $end2;