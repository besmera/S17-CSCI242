<?php

require_once('Shape.php');

class Rectangle extends Shape {
    
    protected $length = 0;
    protected $width = 0;
    
    //const
    
    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }
    
    public function area()
    {
        return $this->length * $this->width;
    }


    
}