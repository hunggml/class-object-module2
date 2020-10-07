<?php

class Person{
    private $name;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

}

$hung = new Person();
$hung->setName("Hung Viet");
echo $hung->getName();