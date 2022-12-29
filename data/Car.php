<?php

namespace Data;

interface HasBrand
{
    function getBrand(): void;
}

interface IsMaintenance
{
    function IsMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance
{
    function drive(): void
    {
        echo "Drive Avanza";
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): void
    {
        echo "Toyota";
    }

    function IsMaintenance(): bool
    {
        return true;
    }
}
