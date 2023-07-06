<?php
function oddEvenString($s) {
    $arr = str_split($s);
    $strEven = [];
    $strOdd = [];

    for($x=0; $x<count($arr); $x++) {
        $n = $x % 2;
        if($n == 0) {
            array_push($strEven, $arr[$x]);
        } else {
            array_push($strOdd, $arr[$x]);
        }
        
    }

    echo implode("", $strEven) . " " . implode("", $strOdd);
    
}
oddEvenString("Marvin");