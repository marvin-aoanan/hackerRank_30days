<?php

namespace cat;

use animal\Animal;
class Cat extends Animal {
    public function __construct() {
        parent::__construct(9);
        echo "A cat has been created. \n";
    }
    public function eat() {
        echo "The cat is eating cat food. \n";
    }

}