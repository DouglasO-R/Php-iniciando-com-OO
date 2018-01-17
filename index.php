<?php
include_once("Carro.php");
include_once("Moto.php");
$mercedes = new Carro();
$mercedes->setCor("preto") ;
$mercedes->setAno("2016");
$mercedes->setMotor(1.8) ;
$mercedes->setMarca("mercedes benz")  ;
$mercedes->portas = 2;

$bis = new Moto();
$bis->setCor("preto") ;
$bis->setAno("2016");
$bis->setMotor(1.8) ;
$bis->setMarca("honda")  ;

echo $mercedes->getMarca()." do ano de:".$mercedes->getAno()."<br>";


echo $bis->getMarca()." do ano de:".$bis->getAno();
var_dump($mercedes);
var_dump($bis);