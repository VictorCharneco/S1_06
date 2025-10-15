<?php

class Animal{
    private $tipusAnimal;
    private $llocNaixement;
    

    public function __construct($tipusAnimal, $llocNaixement){
        $this->tipusAnimal = $tipusAnimal;
        $this->llocNaixement = $llocNaixement;
    }

    public function __toString(){
        return "✅ Animal adoptat" . "\n" . "$this->tipusAnimal" . "\n" . "$this->llocNaixement";
    }

}

?>