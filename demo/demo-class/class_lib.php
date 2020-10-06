<?php
class Person {
    var $name;

    function setName($new_name) {
        $this->name = $new_name;
    }

    function getName() {
        return $this->name;
    }

    public function __construct($personName){
        $this->name = $personName;
    }
}
