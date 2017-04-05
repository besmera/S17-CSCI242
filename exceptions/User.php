<?php

class User {
    //put your code here
    
    protected $username = "";
    protected $subscription = false;
    protected $age = 0;
    
    public function __construct() {
        
    }

    public function getUsername() {
        return $this->username;
    }

    public function getSubscription() {
        return $this->subscription;
    }

    public function getAge() {
        return $this->age;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setSubscription($subscription) {
        $this->subscription = $subscription;
    }

    public function setAge($age) {
        $this->age = $age;
    }


    
    
}
