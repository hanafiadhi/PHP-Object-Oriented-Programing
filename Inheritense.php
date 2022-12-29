<?php

require_once "data/Manager.php";

$m = new Manager();
$m->name = "budi";
$m->sayHello("Hanafi");
echo $m->__construct();

$vp = new VicePresident();
$vp->name = "Eko";
$vp->sayHello("Salsa");
echo $vp->__construct();
