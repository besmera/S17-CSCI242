<?php

require_once("Config.php");

Config::setKey("username", "root");
Config::setKey("password", "password");

echo Config::getKey("username");