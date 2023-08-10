<?php
class Retangulo {
    public $largura;
    public $altura;

 function __construct($largura, $altura)
 {
    $this->largura = $largura;
    $this->altura = $altura;

 }
 function call_area(){
    return $this->largura* $this->altura;;
 }
 function call_perimetro(){
    return $this->largura * 2 + $this->altura*2;;
}



}
