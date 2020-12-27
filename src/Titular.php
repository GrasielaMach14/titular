<?php

class Titular {
    private $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validarNome($nome);
    }

    public function recuperarNome() : string {
        return $this->nome;
    }

    public function recuperarCpf() : string {
        return $this->cpf->recuperarNumero();
    }
    //Nem todos os métodos devem ser públicos, apenas a classe deve resguardar esse método
    private function validarNome($nome) {
        if(strlen($nome) < 5) {
            echo 'Não é possível ter 5 caracteres no campo nome.';
            exit;
        }
    }
}