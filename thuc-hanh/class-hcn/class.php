<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct($newWidth,$newHeight)
    {
        $this->width = $newWidth;
        $this->height = $newHeight;
    }

    function getArea() {
        return $this->width* $this->height;
    }

    function getPerimeter(){
        return (($this->width+$this->height)*2);
    }

    function display(){
        echo "Rectangle { "."width : " . $this->width . ",height : " . $this->height . " }";
    }

}