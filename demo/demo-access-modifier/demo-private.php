<?php

class customer
{
    private $name;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

$c = new customer();
$c->setName("hung");

echo $c->getName();