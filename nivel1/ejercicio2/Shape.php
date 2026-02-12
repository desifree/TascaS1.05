<?php

abstract class Shape {
    private float $height;
    private float $base;

    public function __construct(float $height, float $base) {
        $this->height = $height;
        $this->base = $base;

    }

    public function getHeight(): float {
        return $this-> height;

    }
    
    public function getBase(): float {
        return $this->base;

    }

    abstract public function calculateArea(): float;
    
}

?>