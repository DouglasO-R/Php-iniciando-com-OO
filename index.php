<?php
include_once("Carro.php");
include_once("Moto.php");

$mercedes = new Carro("1.8","preto");
$mercedes->setAno("2016");
$mercedes->setMarca("mercedes benz")  ;
$mercedes->portas = 2;

$bis = new Moto(1.8,"preto" );
$bis->setAno("2016");
$bis->setMarca("honda")  ;


echo $mercedes->getMarca()." do ano de: ".$mercedes->getAno()."<br>";


echo $bis->getMarca()." do ano de: ".$bis->getAno()."<br>";

echo $bis->cor;

var_dump($mercedes);
var_dump($bis);