<?php

require("vendor/autoload.php");

// Handle routing requests to controllers
use Besmer\Controller\PeopleController;

$peopleController = new PeopleController();

$path = explode("/", $_SERVER["PATH_INFO"]);

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if($path[1] == "people")
    {
        echo $peopleController->people();
        exit();
        //handle the people page
    }
    else if($path[2] == "person")
    {
        echo $peopleController->person($path[3]);
        exit();
        //handle the person page
    }
       
}
    



header("404 Not Found");

var_dump($path);
echo "Page not found!";
exit();