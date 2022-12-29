<?php
require_once "data/Category.php";

$category = new Category();
// $category->name = "hanafi";
$category->setName("Handphone");
$category->setexpensive(true);

echo "Nama : {$category->getName()}" . PHP_EOL;
echo "expensive : {$category->isexpensive()}";
