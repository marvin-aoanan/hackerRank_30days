<?php

class GuessTheNumber {
    public function howBigIsMyNumber($x) {
        if( $x >= 0 && $x <= 10 ) {
            echo "Our number is small";
        } else if ($x >= 11 && $x <= 100) {
            echo "Our number is big";
        } else {
            echo "Our number is out of range";
        }
    }
}

$guessNum = new GuessTheNumber;
$guessNum->howBigIsMyNumber(1000) . "\n";
$guessNum->howBigIsMyNumber(10) . "\n";
$guessNum->howBigIsMyNumber(99) . "\n";
