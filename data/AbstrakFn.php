<?php

namespace data;

abstract class Animal
{
    public string $name;

    public abstract function run();
}

class cat extends Animal
{
    public function run()
    {
        echo " Cat $this->name is running" . PHP_EOL;
    }
}
