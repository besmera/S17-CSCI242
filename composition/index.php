<?php

require("Student.php");
require("Course.php");

$brett = new Student();
$brett->setName("Brett");

$whitney = new Student();
$whitney->setName("Whitney");

$taylor = new Student();
$taylor->setName("Taylor");

$csci242 = new Course();
$csci242->setName("CSCI242");

$csci242->addStudent($brett);
$csci242->addStudent($whitney);
$csci242->addStudent($taylor);

foreach($csci242->getStudents() as $student)
{
    echo "Current student is " . $student->getName();
}
