<?php

class Retangulo{
    public $largura;
    public $altura;

public function __construct($largura,$altura)
{
    $this->largura = $largura;
    $this->altura = $altura;
}

    public function calcularArea(){
        $area = $this->largura * $this->altura;
        return $area;
    }

    public function calculaPerimetro(){
        $perimetro = 2 * ($this->largura + $this->altura);
        return $perimetro;
    }
}

$altura = 10;
$largura = 10;
$r1 = new Retangulo($largura,$altura);

echo "Área: " . $r1->calcularArea() . "<br>";
echo "Perímetro: " . $r1->calculaPerimetro() ;
