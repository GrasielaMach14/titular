<?php 

class Conta 
{
    private $titular;
    private $saldo;
    private static $qtd_contas = 0;

    public function __construct(Titular $titular) {
        echo "Criando uma nova conta" . PHP_EOL;
        $this->titular = $titular;        
        $this->saldo = 0;

        self::$qtd_contas++;
    }
    //É executado para destruir a referência da instância na memória
    public function __destruct() {
        if(self::$qtd_contas > 2) {
            echo 'Há mais de uma conta ativa';

            self::$qtd_contas--;
        }
    }

    public function sacar(float $sacarValor) {
        if($sacarValor > $this->saldo) {
            echo 'Saldo insuficiente.';
            return;
        }
            $this->saldo -= $sacarValor;        
    }

    public function depositar(float $depositarValor) : void {
        if($depositarValor < 0) {
            echo 'Não é possível efetuar esta operação.';
            return;
        }
            $this->saldo += $depositarValor;        
    }

    public function transferir(float $transferirValor, Conta $contaDestino) : void {
        if ($transferirValor > $this->saldo) {
            echo "Valor insuficiente para transferência.";
            return;
        }
            $this->sacar($transferirValor);           
            $contaDestino->depositar($transferirValor);
    }

    public function recuperarSaldo() : float {
        return $this->saldo;
    }

    public function recuperarCpf() : string {
        return $this->titular->recuperarCpf();
    }
    //Retornando dados do atributo privado
    public function recuperarNome() : string {
        return $this->titular->recuperarNome();
    }
    //Usando método estático para instanciar objetos, ele retornará a qtd de contas 
    public static function recuperarQtdContas($qtd_contas) {
        return self::$qtd_contas;
    }
    
}

?>