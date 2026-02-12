<?php
class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;

    }

    // metodo sera sobre escrito por las subclass
    public function talk() {
        throw new Exception("This animal can't talk");
    }
}

class Dog extends Animal {
    public function talk() {
        return "Woaf!";

    }
}

class Cat extends Animal {
    public function talk() {
        return "Meow!";
    }
}

Class Chicken extends Animal {
    public function talk() {
        return "Pio Pio!";
    }
}

Class Bear extends Animal {
    public function talk() {
        return "Woooarr!";
    }
}

$peperro = new Dog("Peperro");
$bruno = new Dog("Bruno");
$pipiolo = new Chicken("Pipiolo");
$yogui = new Bear("Yogui");

echo $peperro->getName() . " says: " . $peperro->talk() . PHP_EOL;
echo $bruno->getName() . " says: " . $bruno->talk() . PHP_EOL;
echo $pipiolo->getName() . "says: " . $pipiolo->talk() . PHP_EOL;
echo $yogui->getName(). " says: " . $yogui->talk() . PHP_EOL;

    
?>