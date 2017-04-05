<?php

require_once("Rectangle.php");
require_once("Square.php");

$rectangle1 = new Rectangle();
$rectangle1->setColor("green");
$rectangle1->setLength(5);
$rectangle1->setWidth(6);

echo $rectangle1->getColor();

echo $rectangle1->area();


$square1 = new Square();
$square1->setColor("blue");
$square1->setLength(5);

echo $square1->getColor();
echo $square1->area();


$square1->setWidth(6);

echo $square1->getColor();
echo $square1->area();



       


        