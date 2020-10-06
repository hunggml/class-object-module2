<?php

class demoProtec
{

    protected $name;

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}

class sonDemo extends demoProtec
{

    private $age;

    function setData($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }
    function getData(){
        return $this->name;
        return $this->age;
    }
}

$demo = new sonDemo();
$demo->setData("hungml",18);
echo $demo->getData();