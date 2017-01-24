<?php

require_once("Shape.php");

class Circle extends Shape {
    
    private $radius = 0;

    public function __construct() {
        
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function area()
    {
        return 3.14 * $this->radius * $this->radius;
    }
    
    
}
