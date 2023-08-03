<?php
require ("Carro.php");
class Caio {
public $nome; 
 public $idade; 
 public $tamanho;
 public $peso;

  /* function set_idade ($idade){
    $this->idade = $idade;
 }
 */
function __construct($nome,$idade)
{
 $this->nome = $nome;
 $this->idade = $idade;

}
 function get_idade (){
    return $this->idade;
 }

 /* public function set_nome ($nome){
    $this->nome = $nome; 
 }
 */
 public function get_nome (){
    return $this->nome;
 }
}

$pessoa = new caio("caio",18);
$pessoa2 = new caio("jose", 20);


echo $pessoa->get_nome(). " tem: ".$pessoa->get_idade()." anos"."</br>";  
echo $pessoa2->get_nome(). " tem: ".$pessoa2->get_idade()." anos"."</br>";  


$carro = new carro("Fiat","Uno", 2014);
echo "marca:".$carro->get_marca()."</br>";
echo "modelo:".$carro->get_modelo()."</br>";
echo "ano:".$carro->get_ano()."</br>";


?> 
