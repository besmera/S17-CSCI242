<?php

require_once('Rectangle.php');

$rec1 = new Rectangle();
$rec2 = new Rectangle();

echo "Rectangle 1's border is " . $rec1->getBorderColor() . "<br>";
echo "Rectangle 2's border is " . $rec2->getBorderColor() . "<br>";

Rectangle::setBorderColor("#00FF00");  //Only if method isn't static which it prob should be


echo "Rectangle 1's border is " . $rec1->getBorderColor() . "<br>";
echo "Rectangle 2's border is " . $rec2->getBorderColor() . "<br>";


