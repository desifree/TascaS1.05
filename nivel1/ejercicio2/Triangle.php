<?php

require_once "Shape.php";

class Triangle extends Shape {
    public function calculateArea(): float {
        return ($this->getBase() * $this->getHeight()) / 2;
        
    }
}

?>