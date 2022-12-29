<?php

require_once "data/Person.php";

$person = new Person();

$person->nama = "Hanafi";
$person->address = null;
$person->country = "indonesia";

// echo "nama : {$person->nama}" . PHP_EOL;
var_dump($person);
