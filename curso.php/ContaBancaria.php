<?php

class ContaBancaria{
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor; 
    }
    public function sacar($valor){
        $this->saldo -= $valor;
    }
    public function exibirSaldo(){
        print "Saldo: " . $this->saldo;
    }

}

$titular = 'adam';
$saldo = 1200;

$conta1 = new ContaBancaria($titular,$saldo);
$conta1->depositar(1200);
$conta1->sacar(600);
$conta1->exibirSaldo();
