<?php
include 'Resizeable.php';

class Circle1 implements Resizeable
{
    public $radius;


    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    function resize($doublePersent)
    {
        $this->radius += $doublePersent;
    }


}

?>
