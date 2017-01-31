<?php

require("Student.php");

$student1 = new Student();
$student2 = new Student();

$student1->setName("Andrew");
$student2->setName("Andrew");

$student1->setAge(21);
$student2->setAge(21);

$student1->setFriend($student2);
$student2->setFriend($student1);

if($student1 == $student2)
{
    echo "They are equal";
}
else
{
    echo "They are not equal.";
}

