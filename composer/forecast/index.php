<?php

require_once("vendor/autoload.php");

use Forecast\Forecast;

$forecast = new Forecast("ad7ef7d2d1a37a2689d9e36d4495e3bb");

//34.939976, -81.028567

$result = $forecast->get("34.939976", "-81.028567");

echo "The forecast for Winthrop University is " . $result->currently->summary . " and the temperature is " . $result->currently->temperature;
