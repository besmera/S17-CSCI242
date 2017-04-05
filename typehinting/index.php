<?php

require_once("Square.php");

$square1 = new Square();

$square1->setColor("blue");

$square1->setLength(4);
$square1->setWidth(4);

$rectangle1 = new Rectangle();
$rectangle1->setColor("green");


/*echo $rectangle1->getColor();

echo $square1->getColor();
*/

//printToScreen($square1);
printToScreen($rectangle1);


function printToScreen(iPrintable $shape)
{
    echo $shape;
}