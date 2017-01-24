<?php

require_once("Rectangle.php");

class Square extends Rectangle {

    public function __construct() {
        
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->width = $length;
    }
    
    public function setWidth($width)
    {
        $this->setLength($width);
    }
    
    
}
