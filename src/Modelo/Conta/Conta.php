<?php 

namespace pooPhp\phpOo\Modelo\Conta;

use pooPhp\phpOo\Modelo\Conta\Titular;

/**
 * Class Endereco
 * @package pooPhp\phpOo\Modelo\Conta
 * @param float $contaDestino
 */

abstract class Conta 
{
    private $titular;
    protected $saldo;
    private static $qtd_contas = 0;

    public function __construct(Titular $titular) 
    {
        echo "Criando uma nova conta" . PHP_EOL;
        $this->titular = $titular;        
        $this->saldo = 0;

        self::$qtd_contas++;
    }
    //É executado para destruir a referência da instância na memória
    public function __destruct() 
    {
        if(self::$qtd_contas > 2) 
        {
            echo 'Há mais de uma conta ativa' . PHP_EOL;
            self::$qtd_contas--;
        }
    }

    public function sacar(float $sacarValor) :void 
    {
        $tarifa = $sacarValor * $this->percentualTarifa();
        $valorSaque = $sacarValor + $tarifa;

        if($valorSaque > $this->saldo) 
        {
            echo 'Saldo insuficiente.';
            return;
        }
            $this->saldo -= $valorSaque;        
    }

    public function depositar(float $depositarValor) : void 
    {
        if($depositarValor < 0) 
        {
            echo 'Não é possível efetuar esta operação.';
            return;
        }
            $this->saldo += $depositarValor;        
    }

    public function transferir(float $transfereValor, Conta $contaDestino) : void 
    {
        if($transfereValor > $this->saldo)
        {
            echo 'Saldo indisponível.';
        }

        $this->sacar($transfereValor);
        $contaDestino->depositar($transfereValor);
    }

    public function recuperarSaldo() : float 
    {
        return $this->saldo;
    }

    public function retornarCpf() : string 
    {
        return $this->titular->retornarCpf();
    }
    //Retornando dados do atributo privado
    public function retornarNome() : string 
    {
        return $this->titular->retornarNome();
    }
    //Usando método estático para instanciar objetos, ele retornará a qtd de contas 
    public static function recuperarQtdContas($qtd_contas) 
    {
        return self::$qtd_contas;
    }    

    abstract protected function percentualTarifa(): float;
}

?>