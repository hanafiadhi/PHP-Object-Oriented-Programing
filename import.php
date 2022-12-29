<?php

require_once "data/conflict.php";
require_once "data/Helpme.php";

use data\one\{conflict as conflict1, war as ofwar};
use data\one\conflict;
use data\one\war;

use function Help\helpme as help;
use const Help\APP as aplication;

$conflict1 = new conflict1();
$conflict2 = new ofwar();


help();

echo aplication . PHP_EOL;
