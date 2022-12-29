<?php

namespace Data\traits;

trait Good
{
    function GoodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function SayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(): void;
}


class ParentPerson
{
    function goodBye(?string $name): void
    {
        echo "Overide Trait goodBye" . PHP_EOL;
    }

    function Hello(?string $name): void
    {
        echo "Overide Trait Hello" . PHP_EOL;
    }
}

trait ALL
{
    use Good, SayHello, CanRun;
}


class Person extends ParentPerson
{
    use ALL;

    public function run(): void
    {
        echo "Person {$this->name} is running" . PHP_EOL;
    }
}
