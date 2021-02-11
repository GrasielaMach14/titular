<?php
namespace pooPhp\phpOo\Modelo;
/* Autenticavel implementa todos os métodos abstratos obrigando as classes filhas a add este método */
interface Autenticavel
{
    public function autenticar(string $senha): bool;
}