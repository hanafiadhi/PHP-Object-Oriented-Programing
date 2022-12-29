<?php
// $date = new DateTime();
// $date->setDate(2000, 03, 29);
// $date->setTime(12, 12, 12);

// $date->add(new DateInterval("P4Y"));

// $dateInterval = new DateInterval("P1M");
// $dateInterval->invert = true;

// $date->add($dateInterval);

// $date = new DateTime();
// $date->setTimezone(new DateTimeZone("America/Los_Angeles"));

// echo $date->format() . PHP_EOL;


// $date = DateTime::createFromFormat("Y-m-d H:i:s", "2000-03-29 10:10:10", new DateTimeZone("Asia/Jakarta"));
// var_dump($date);
// $match = [];
// $result = preg_match_all("/mk|muh|suko/i", "smki Muhammadiyah 1 Sukoharjo", $match);
$result = preg_split("/[\s,-]/", "lihat kebunku,penuh dengan-Bunga");

var_dump($result);
// var_dump($match);
