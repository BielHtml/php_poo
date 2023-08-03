<?php
class Retangulo {
    public $largura;
    public $altura;

 function __construct($largura, $altura)
 {
    $this->largura = $largura;
    $this->altura = $altura;

 }
 function get_largura(){
    return $this->largura;
 }
 function get_altura(){
    return $this->altura;
}
function calllargura($largura){
$this->largura = $largura;
return $this->largura*2;

}
function callAltura($altura){
$this->altura = $altura;
return $this->altura*2;
}


}

$retagulo = new Retangulo(2,2);
retangulo->;