<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $velocidadeAtual;

    public function __construct($marca,$modelo,$ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = 0;
    }

    public function acelerar($aumentarVelocidade){
        $this->velocidadeAtual += $aumentarVelocidade;
    }
    public function frear($diminuirVelocidade){
    $this->velocidadeAtual -= $diminuirVelocidade;
}
    public function exibirInformacoes(){
        echo "Marca: {$this->marca}<br>Modelo: {$this->modelo}<br>Ano: {$this->ano}<br>Velocidade atual: {$this->velocidadeAtual} ";
    }
}

$marca = "Chevrolet";
$modelo = "Celta";
$ano = 2016;
$velocidadeAtual = 0;

$carro1 = new Carro($marca,$modelo,$ano);

$carro1->acelerar(100);
$carro1->frear(50);
$carro1->exibirInformacoes();