<?php

require("Logger.php");

use Besmer\Logger;

$logger = Logger::getInstance("log.txt");

$logger->log("Log message");


