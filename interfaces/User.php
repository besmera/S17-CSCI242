<?php

require_once("iPrintable.php");


class User implements iPrintable {
    //put your code here
    
    private $firstName = "";
    private $lastName = "";
    
    public function __construct() {
        
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function __toString() {
        return $this->firstName . " " . $this->lastName;
    }
    
    
}
