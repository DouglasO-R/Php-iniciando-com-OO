<?php
include_once("Carro.php");

$mercedes = new Carro();
$mercedes->cor = "preto";
$mercedes->ano = 2016;
$mercedes->motor = 1.8;
$mercedes->marca = "mercedes benz";

var_dump($mercedes);