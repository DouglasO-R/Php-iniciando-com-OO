<?php

interface IVeiculo{
    
    public function getCor();
    public function getAno();
    public function getMarca();
    public function getMotor();
    public function setCor($cor);

    public function setAno($ano);

    public function setMarca($marca);

    public function setMotor($motor);
}