<?php
require_once "data/sayGoodbye.php";

use Data\traits\{Person, Good, SayHello};

$person =  new Person();
echo $person->name = "Gilang" . PHP_EOL;
$person->GoodBye("Hanafi");
$person->SayHello("Hamam");
$person->run();
