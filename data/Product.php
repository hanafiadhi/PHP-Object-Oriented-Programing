<?php

class Product
{

    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName()
    {
        return $this->name;
    }

    function getprice()
    {
        return $this->price;
    }
}
