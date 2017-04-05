<?php

require_once("Rectangle.php");
require_once("Circle.php");

$rectangle1 = new Rectangle();
$rectangle1->setColor("green");
$rectangle1->setLength(5);
$rectangle1->setWidth(6);

echo $rectangle1->getColor();

echo $rectangle1->area();

$circle1 = new Circle();
$circle1->setRadius(5);
$circle1->setColor("pink");
        
echo $circle1->getColor();
echo $circle1->area();


        