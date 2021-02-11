<?php

namespace pooPhp\phpOo\Modelo;

/**
 * Class Endereco
 * @package pooPhp\phpOo\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
class Endereco
{
    use AcessoPropriedade;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function retornarCidade(): string
    {
        return $this->cidade;
    }

    public function retornarBairro(): string
    {
        return $this->bairro;
    }

    public function retornarRua(): string
    {
        return $this->rua;
    }

    public function retornarNumero(): string
    {
        return $this->numero;
    }
    /* Define a formatação do texto usando método mágico __toString() */
    public function __toString(): string
    {
        return "{$this->cidade}, {$this->bairro}, {$this->rua}, {$this->numero}";
    }

/*     public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    } */
}
