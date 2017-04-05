<?php

class Student
{
    
    //name, age, gender, studentId
    
    private $name = "";
    private $age = 0;
    private $gender;
    private $studentId;
    
    
    public function __construct() {
        $this->gender = null;
        $this->studentId = rand(300000000, 400000000);
    }
    
    
    public function setName($name)
    {
        if(!is_numeric($name))
        {
            $this->name = $name;
        }
    }
    
    public function getName()
    {
        return $this->name;
    }
    
}