<?php
class Manager
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }
    function  sayHello(string $name)
    {
        echo "hii $name , My name is $this->name Manager" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    function  sayHello(string $name)
    {
        echo "hii $name , My name is $this->name Vice Presiden" . PHP_EOL;
    }
}
