<?php

namespace Data;

class Shape
{
    function getCornor(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCornor(): int
    {
        return 4;
    }

    public function getParentCornor(): int
    {
        return parent::getCornor();
    }
}
