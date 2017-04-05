<?php

class Course {
    
    private $name = "";
    
    private $students = array();
    
    public function __construct() {
        
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function getStudents()
    {
        return $this->students;
    }
    
    public function addStudent($student)
    {
        $this->students[] = $student;
    }
}