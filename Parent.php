<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$new = new Shape();
echo $new->getCornor() . PHP_EOL;

$new2 = new Rectangle();
echo $new2->getCornor() . PHP_EOL;

echo $new2->getParentCornor() . PHP_EOL;
