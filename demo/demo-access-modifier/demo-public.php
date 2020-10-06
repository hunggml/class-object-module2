<?php
class demoPublic{
     public $name;

     function setName($name){
         $this->name = $name;
     }
     function getName(){
         return $this->name;
     }

}

$a = new demoPublic();
$a->setName('hungml');
echo $a->name;