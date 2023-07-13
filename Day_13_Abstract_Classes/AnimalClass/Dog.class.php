<?php

namespace dog;

use animal\Animal;
class Dog extends Animal {
    public function __construct() {
        echo "A dog has been created. \n";
    }
    public function eat() {
        echo "A dog is eating... \n";
    }
    public function sleep() {
        echo "A dog is sleeping. \n";
    }
}