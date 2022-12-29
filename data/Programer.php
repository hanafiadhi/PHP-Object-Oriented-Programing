<?php

class Programer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgramer extends Programer
{
}

class FrontendProgramer extends Programer
{
}

class Company
{
    var Programer $Programer;
}

function sayProgramer(Programer $programer)
{
    // echo "Hii $programer->name" . PHP_EOL;
    if ($programer instanceof BackendProgramer) {
        echo "hai Backend Programer $programer->name" . PHP_EOL;
    } elseif ($programer instanceof FrontendProgramer) {
        echo "Hai Frontend Programer $programer->name" . PHP_EOL;
    } elseif ($programer instanceof Programer) {
        echo "hai Programer $programer->name" . PHP_EOL;
    }
}
