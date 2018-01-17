<?php
include_once("Veiculo.php");

class Carro extends Veiculo{

    public $portas;

    public function getPortas(){
        return $this->portas;
    }
    public function setPortas($portas){
        return $this->portas = $portas;
    }
}