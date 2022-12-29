<?php
require_once "data/Car.php";

use Data\Avanza;

$avanza = new Avanza();

echo $avanza->drive() . PHP_EOL;
echo $avanza->getTire() . PHP_EOL;
echo $avanza->getBrand() . PHP_EOL;
echo $avanza->IsMaintenance() . PHP_EOL;
