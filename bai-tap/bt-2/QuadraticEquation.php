<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($newa, $newb, $newc)
    {
        $this->a = $newa;
        $this->b = $newb;
        $this->c = $newc;
    }


    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return (($this->b * $this->b) - (4 * $this->a * $this->c));
    }

    function getRoot1()
    {
        return ((-$this->b + sqrt(($this->b * $this->b - (4 * $this->a * $this->c)))) / 2 * $this->a);
    }

    function getRoot2()
    {
        return ((-$this->b - sqrt(($this->b * $this->b - (4 * $this->a * $this->c)))) / 2 * $this->a);
    }

}