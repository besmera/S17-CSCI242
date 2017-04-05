<?php

class Student {



private $name = "";
private $age=0;

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
}
