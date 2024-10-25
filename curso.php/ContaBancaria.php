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
        if($valor > 0){
            $this->saldo += $valor; 
        }
        else{
            echo "O valor deve ser positivo!" . "<br>";
        }

    }
    public function sacar($valor){
        if($valor > $this->saldo){
            echo "Saldo insuficiente para saque!" . "<br>";
        }else{
        $this->saldo -= $valor;
    }
    }
    public function exibirSaldo(){
        print "Saldo: " . number_format($this->saldo, 2, ',', '.');
    }

}

$titular = 'adam';
$saldo = 1200;

$conta1 = new ContaBancaria($titular,$saldo);
$conta1->depositar(1600);
$conta1->sacar(600);
$conta1->exibirSaldo();
