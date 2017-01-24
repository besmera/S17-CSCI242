<?php

abstract class Shape {
    private $color = "";
    
    //const
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public abstract function area();
    
}