<?php

class Student {

    

private $name = "";
private $age=0;
private $friend = null;

public function __construct()
{
    
}


public function getName()
{
return $this->name;
}

public function getAge()
{
return $this->age;
}




public function setName($name) 
{
	$this->name = $name;
}

public function setAge($age)
{
	$this->age = $age;
}

    public function getFriend() {
        return $this->friend;
    }

    public function setFriend($friend) {
        $this->friend = $friend;
    }

    
    
}
