<?php

abstract class Shape {
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
    
    public abstract function area();
    
}