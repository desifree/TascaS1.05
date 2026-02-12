<?php

require_once "Dog.php";
require_once "Cat.php";
require_once "Chicken.php";
require_once "Bear.php";

$peperro = new Dog("Peperro");
$bruno = new Cat("Bruno");
$pipiolo = new Chicken("Pipiolo");
$yogui = new Bear("Yogui");

echo $peperro->getName() . " says: " . $peperro->talk() . PHP_EOL;
echo $bruno->getName() . " says: " . $bruno->talk() . PHP_EOL;
echo $pipiolo->getName() . " says: " . $pipiolo->talk() . PHP_EOL;
echo $yogui->getName() . " says: " . $yogui->talk() . PHP_EOL;


?>