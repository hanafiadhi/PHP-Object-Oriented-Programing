<?php
$array = [
    "firstName" => "Hanafi",
    "lastName" => "Adhi",
    "bron" => [
        "tanggal" => 29,
        "bulan" => "Maret"
    ]
];

$object = (object) $array;



var_dump($object);
