<?php
include_once("Carro.php");

$mercedes = new Carro();
$mercedes->setCor("preto") ;
$mercedes->setAno("2016");
$mercedes->setMotor(1.8) ;
$mercedes->setMarca("mercedes benz")  ;

echo $mercedes->getMarca()." do ano de:".$mercedes->getAno();

var_dump($mercedes);