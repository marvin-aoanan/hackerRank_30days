<?php
class Person{
    public $age;
    public function __construct($initialAge){
        if ($initialAge <= 0) {
            echo "Age is not valid, setting age to 0." . PHP_EOL;
            $this->age = 0;
        } else {
            $this->age = $initialAge;
        }
    }
    public function amIOld(){
            // Do some computations in here and print out the correct statement to the console 
            if ($this->age < 13) {
                echo "You are young." . PHP_EOL;
            } elseif ($this->age >= 13 && $this->age < 18) {
                echo "You are a teenager." . PHP_EOL;
            } else {
                echo "You are old." . PHP_EOL;
            }
    }
    public function yearPasses() {
          // Increment the age of the person in here
          $this->age += 1;  
    }
   
}

$age = new Person(12);
//$age->age = 0;
echo $age->amIOld();
echo $age->yearPasses();
echo $age->amIOld();
?>