<?php
include_once("Carro.php");

$mercedes = new Carro();
$mercedes->cor = "preto";
$mercedes->ano = "2016";
$mercedes->motor = 1.8;
$mercedes->marca = "mercedes benz";

echo $mercedes->getMarca()." do ano de:".$mercedes->getAno();

var_dump($mercedes);