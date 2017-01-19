<?php

require("Student.php");

$brett = new Student();
$brett->setName("Brett");

$whitney = new Student();
$whitney->setName("Whitney");

$taylor = new Student();
$taylor->setName("Taylor");

echo '$brett is set to ' . $brett->getName();
echo '$whitney is set to ' . $whitney->getName();
echo '$taylor is set to ' . $taylor->getName();