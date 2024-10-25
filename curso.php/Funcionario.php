<?php

class Funcionario{
    public $nome;
    public $salario;

    public function __construct($nome,$salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        $this->salario *= 1 + ($percentual/100);
    }

    public function exibirSalario(){
        echo "Salário atualizado: R$ " . number_format($this->salario, 2, ',', '.');
    }
 
}
$nome = 'adam';
$salario = 1200;
$percentual = 10;

$funcionario1 = new Funcionario($nome,$salario);
$funcionario1->aumentarSalario($percentual);
$funcionario1->exibirSalario();
