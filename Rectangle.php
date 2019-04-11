<?php
class Rectangle1 implements Resizeable{
    public $height;
    public $width;
    public function __construct($width,$height)
    {
        $this->height=$height;
        $this->width=$width;
    }
    function getArearectangle(){
        return $this->width*$this->height;
    }

    public function resize($height)
    {
        $this->height+= $height;
    }
}

