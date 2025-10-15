<?php

class Animal{
    private $tipusAnimal;
    private $llocNaixement;
    

    public function __construct(string $tipusAnimal, string $llocNaixement){
        $this->tipusAnimal = $tipusAnimal;
        $this->llocNaixement = $llocNaixement;
    }

    public function __toString() : string{
        return "✅ Animal adoptat" . "\n" . "$this->tipusAnimal" . "\n" . "$this->llocNaixement";
    }

}

?>