<?php

class Moto extends Veiculo{

    public function __construct($motor,$cor){

        parent::__construct($motor,strtoupper($cor));
    }

}