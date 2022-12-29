<?php
require_once "data/Product.php";


$produk = new Product("apple", 10000);

echo $produk->getName() . PHP_EOL;
echo $produk->getprice() . PHP_EOL;

// $produk->name = "orange";
