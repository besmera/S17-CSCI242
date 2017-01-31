<?php


class Rectangle {
    
    protected $color = "";
    protected $length = 0;
    protected $width = 0;
    
    protected static $border = "#FF0000";
        
    public function __construct() {
        
    }

    public function getColor() {
        return $this->color;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public static function getBorderColor()
    {
        return self::$border;
    }
     
    public static function setBorderColor($borderColor)
    {
        self::$border = $borderColor;
    }
}
