<?php
function loopNum($n) {
    for ($x = 1; $x < 11; $x++) {
        $result =  $n*$x;
        echo $n . " x " . $x . " = " . $result . "\n"; 
    }
}

loopNum(3);