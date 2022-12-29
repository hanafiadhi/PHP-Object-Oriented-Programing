<?php

require_once "data/Person.php";

$person = new Person();

$person->nama = "Hanafi";
$person->address = "Cilacap";
$person->country = "indonesia";

$person->sayHello('hanafi');

// echo "nama : {$person->nama}" . PHP_EOL;
// var_dump($person);
