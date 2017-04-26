<?php


//var_dump($_SERVER);

$path = explode("/", $_SERVER["PATH_INFO"]);

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    if($path[1] == "home")
    {
        echo "homepage";
    }
    elseif ($path[1] == "about") {
        echo "about page";    
    }
}