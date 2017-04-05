<?php

require("Student.php");

$brett = new Student();  //calls __construct()
$whitney = new Student();

//$brett->setName("Brett");
$brett->setName(4);  //wont work because we have controlled the setting of the variable
$whitney->setName("Whitney");

echo "This is an example student " . $brett->getName();
echo "This is an example student " . $whitney->getName();

