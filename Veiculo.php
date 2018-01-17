<?php

Class Veiculo{

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

    public function setCor($cor){
        return $this->cor = $cor;
    }

    public function setAno($ano){
        return $this->ano = $ano;
    }

    public function setMarca($marca){
        return $this->marca = $marca;
    }

    public function setMotor($motor){
        return $this->motor = $motor;
    }
}