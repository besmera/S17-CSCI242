<?php

require_once('iPrintable.php');

abstract class Shape implements iPrintable {
    protected $color = "";
    
    //const
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function __toString() {
        return $this->color;
    }
}