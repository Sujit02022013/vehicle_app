<?php

abstract class CustomerBase {
    protected $name;
    protected $image;


    public function __construct($name, $image) {
        $this->name = $name;
        $this->image = $image;
    }

    abstract public function getDetails();

    public function anotherMethod() {
        return "This is another method in the abstract class.";
    }
}