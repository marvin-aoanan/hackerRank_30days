<?php

class Car {
    public $maxSpeed = 100;
    public $minSpeed = 0;
    public $weight = 4079;
    public $isTheCarOn = false;
    public $condition = "A";
    public $nameOfCar =  "Marv";
    public $maxFuel = 16;
    public $currentFuel = 8;
    public $mpg = 26.4;

    public $numOfPeopleInCar = 1;

    public $maxNumOfPeopleInCar = 6;

    public function __construct($cutomMaxSpeed, $customWeight, $customIsTheCarOn,) {
        $this->maxSpeed = $cutomMaxSpeed;
        $this->weight = $customWeight;
        $this->isTheCarOn = $customIsTheCarOn;
    }

    // Getters & Setters

    public function getMaxSpeed() {
        return $this->maxSpeed;
    }
    public function setMaxSpeed($newMaxSpeed) {
        $this->maxSpeed = $newMaxSpeed;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getIsTheCarOn() {
        return $this->isTheCarOn;
    }

    public function getMinSpeed() {
        return $this->minSpeed;
    }

}

$mycar = new Car(10000, 5000, false);
echo $mycar->getMaxSpeed();
echo "\n";
echo $mycar->getIsTheCarOn();
echo "\n";
echo $mycar->getWeight();
echo "\n";
echo $mycar->setMaxSpeed(9000);
echo "\n";
echo $mycar->getMaxSpeed();