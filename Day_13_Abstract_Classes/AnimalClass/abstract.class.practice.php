<?php
/**
 * Day 13: Abstract Classess, Abstract Methods, Instance Of and Type Casting
 * What is an Abstract Class:
 * 1. Class w/ at least one abstract method, a method that is declared without an implementattion
 * 2. May have abstract and non-abstract methods 
 * 3. Can not be initialized / instantiated on its own
 * 4. Don't have a body - meaning, don't have a code inside them
 * 5. examples: public int getAge(); or public getName();
 * 6. It can only use/implement by the subclass
 */

namespace animal;

use cat\Cat;
use dog\Dog;

require_once('Dog.class.php');
require_once('Cat.class.php');

abstract class Animal {
    private $age = 15;
    public function __construct($age) {
        $this->age = $age;
        echo "An animal has been created! \n";
    }
    abstract public function eat();
    public function getAge() {
        return $this->age;
    }
    public function sleep() {
        echo "An animal is sleeping. \n";
    }
}



$d = new Dog;
$d->eat();
echo "Dog's age: " . $d->getAge() . "\n";
$d->sleep();

echo "\n----\n";

$c = new Cat;
$c->eat();
echo "Cat's age: " . $c->getAge() . "\n";
$c->sleep();

echo "\n----Casting\n";

$foo = 10;   // $foo is an integer
$bar = (bool) $foo;   // $bar is a boolean
/**
 * The casts allowed are:
 * (int) - cast to int
 * (bool) - cast to bool
 * (float) - cast to float
 * (string) - cast to string
 * (array) - cast to array
 * (object) - cast to object
 * (unset) - cast to NULL
 */