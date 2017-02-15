<?php

require_once('vendor/autoload.php');

use Besmer\Store\Product;

$product1 = new Product();
$product1->setPrice(5.00);
$product1->setName("1 Gallon of Gasoline");

echo $product1->getName();
echo " ";
echo $product1->getPrice();