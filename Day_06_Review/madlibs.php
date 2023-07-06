<?php
class MadLibs {
    public $story;
    public $name;
    public $adj1;
    public $adj2;
    public $noun1;
    public $noun2;
    public $noun3;
    public $adverb;
    public $randomNums;

    // Getters
    public function getStory() {
        return $this->story;
    }
    public function getName() {
        return $this->name;
    }
    public function getAdj1() {
        return $this->adj1;
    }
    public function getAdj2() {
        return $this->adj2;
    }
    public function getNoun1() {
        return $this->noun1;
    }
    public function getNoun2() {
        return $this->noun2;
    }
    public function getNoun3() {
        return $this->noun3;
    }
    public function getAdverb() {
        return $this->adverb;
    }
    public function getRandomNums() {
        return $this->randomNums;
    }

    // Setters
    public function setStory($newStory) {
        $this->story = $newStory;
    }
    public function setName($newName) {
        $this->name = $newName;
    }
    public function setAdj1($newAdj1) {
        $this->adj1 = $newAdj1;
    }
    public function setAdj2($newAdj2) {
        $this->adj2 = $newAdj2;
    }
    public function setNoun1($newNoun1) {
        $this->noun1 = $newNoun1;
    }
    public function setNoun2($newNoun2) {
        $this->noun2 = $newNoun2;
    }
    public function setNoun3($newNoun3) {
        $this->noun3 = $newNoun3;
    }
    public function setAdverb($newAdverb) {
        $this->adverb = $newAdverb;
    }
    public function setRandomNums() {
        $num = abs(rand()) % 100;
        $index = 0;
        $numHolder = [];
        while ($index < 3) {
            $numHolder[$index] = $num + $index;
            $index++;
        }
        $this->randomNums = "not " . $numHolder[0] . ", not " . $numHolder[1] . ", but " . $numHolder[2];
    }
    // Print insturctions to Player
    public function printInstructions() {
        echo "Welcome to the MadLib Game. If you type in your words, we'll give you a story. Start by typing in your name. " . "\n";
    }

    // Get data from the player.
    public function enterName() {
        $name = readline("Enter your name: ");
        $this->setName($name);
    }
    public function enterNoun1() {
        $noun1 = readline("Hey, " .$this->getName() . "! Give me a noun: ");
        $this->setNoun1($noun1);
    }
    public function enterNoun2() {
        $noun2 = readline("Give me another noun: ");
        $this->setNoun2($noun2);
    }
    public function enterNoun3() {
        $noun3 = readline("Give me the last noun: ");
        $this->setNoun3($noun3);
    }
    public function enterAdj1() {
        //$adj1 = readline("I need an adjective: ");
        $this->setAdj1(readline("I need an adjective: "));
    }
    public function enterAdj2() {
        $this->setAdj2(readline("I really need an alpaca... just kidding, give me another adjective: "));
    }
    public function enterAdverb() {
        $this->setAdverb(readline("PLAESE! I really want an adverb: "));
    }
    public function putTogetherStory() {
        //$story = "";
        $story0 =  "Jessie and her best friend " . self::getName() . " went to Disney World today! "
        . "They saw a " . self::getNoun1() . " in a show at Magic Kingdom and ate a "
        . self::getAdj1() . " feast for dinner. The next day, I ran " . self::getAdverb()
        . " to meet Mickey Mouse in his " . self::getNoun2() . " and then that night I gazed at "
        . self::getRandomNums() . " " . self::getAdj2() . " fireworks shooting from the "
        . self::getNoun3() . ".";

        $story1 =  "Amanda and her frienemy " . self::getName() . " went to the zoo last summer! "
        . "They saw a huge " . self::getNoun1() . " and a tiny litte " . self::getNoun2() . ". "
        . "That night, they decided to climb " . self::getAdverb() . " into the " . self::getNoun3()
        . " to get a closer look. The zoo was " . self::getAdj1() . " at night but they didn't care... "
        . "until " . self::getRandomNums() . " " . self::getAdj2() . " apes yelled at their faces "
        . "making Amanda and " . self::getName() . " sprint all the way back home.";

        $num = abs(rand(1,10)) % 2 ;
        if ($num == 0) {
            return self::setStory($story0);
        } else {
            return self::setStory($story1);
        }
        
        
    }
    public function play() {
        self::enterName();
        self::enterNoun1();
        self::enterAdj1();
        self::enterAdj2();
        self::enterNoun2();
        self::enterAdverb();
        self::enterNoun3();
        self::setRandomNums();
        self::putTogetherStory();
        echo self::getStory();
    }
}

$game = new MadLibs;
$game->printInstructions();
$game->play();