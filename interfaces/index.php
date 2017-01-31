<?php

require_once("User.php");

$andrew = new User();
$andrew->setFirstName("Andrew");
$andrew->setLastName("Besmer");

echo $andrew;