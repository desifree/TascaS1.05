<?php

require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";

$triangle = new Triangle(20,10);
echo "Triangle area: " . $triangle->calculateArea();
echo PHP_EOL;

$rectangle = new Rectangle(20,10);
echo "Rectangle area: " . $rectangle->calculateArea();
echo PHP_EOL;

echo "Triangle base: " . $triangle->getBase() . PHP_EOL;
echo "Rectangle height: " . $rectangle->getHeight() . PHP_EOL;
 


?>