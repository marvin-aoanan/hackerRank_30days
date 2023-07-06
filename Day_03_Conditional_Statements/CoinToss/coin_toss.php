<?php

class CoinToss {
    public function tossACoin() {
        $toss = abs(rand(0,100000)) % 2;
        if ($toss == 0) {
            return "HEADS";
        } else {
            return "TAILS";
        }
    }

}

// Instatiating the class CoinToss
$tossCoinGame = new CoinToss;
print_r($tossCoinGame->tossACoin() . "\n");
print_r($tossCoinGame->tossACoin(). "\n");
print_r($tossCoinGame->tossACoin(). "\n");
print_r($tossCoinGame->tossACoin(). "\n");
print_r($tossCoinGame->tossACoin(). "\n");