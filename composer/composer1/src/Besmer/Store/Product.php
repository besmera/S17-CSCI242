<?php

namespace Besmer\Store;

class Product {
    
    protected $name = "";
    protected $price = 0.00;
    
    public function __construct() {
        
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }


}
