<?php

require_once "Shape.php";

class Rectangle extends Shape
{

    public function calculateArea(): float
    {
        return $this->getBase() * $this->getHeight();
    }
}
