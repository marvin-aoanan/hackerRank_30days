<?php

class LoopPractice {

    public static function practiceWhileLoop() {
        $x = 0;
        while ($x < 5) {
            echo  "The number is " . $x . "\n";
            $x++;
        }
    }

    public static function practiceDoWhileLoop() {
        $x = 0;
        do {
            echo "The number is " . $x . "\n";
            $x++;
        }
        while ($x < 10);
    }

    public static function practiceForLoop() {
        for ($x = 0; $x < 20; $x++) {
            echo "The number is " . $x . "\n";
        }
    }

    public static function practiceForLoopDecrement() {
        for ($x = 10; $x > 0; $x--) {
            echo "The number is " . $x . "\n";
        }
    }

    public static function practiceNestedForLoop() {
        for ($x = 0; $x < 10; $x++) {
            for ($y = 0; $y < 10; $y++) {
                echo "(". $x . "," . $y . ")" . "\n";
            }
        }
    }
}

LoopPractice::practiceNestedForLoop();