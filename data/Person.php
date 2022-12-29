<?php

class Person
{
    const AUTHOR = "Programer";

    var string $nama;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(?string $nama): void
    {
        if (is_null($nama)) {
            echo "Hello my name is {$this->nama}" . PHP_EOL;
        } else {
            echo "hello $nama , My name is $this->nama" . PHP_EOL;
        }
    }

    function __destruct()
    {
        echo "Object Person $this->nama is destroyed" . PHP_EOL;
    }
}
