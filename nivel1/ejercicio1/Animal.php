<?php

require_once "Talker.php";

abstract class Animal implements Talker {
    protected $name;

    public function __construct($name) {
        $this->name = $name;

    }

    public function getName() {
        return $this->name;
    }
}



?>