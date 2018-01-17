<?php

Class Carro{

    public $cor;
    public $ano;
    public $marca;
    public $motor;

    public function getCor(){
        return $this->cor;
    }
    
    public function getAno(){
        return $this->ano;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getMotor(){
        return $this->motor();
    }
}