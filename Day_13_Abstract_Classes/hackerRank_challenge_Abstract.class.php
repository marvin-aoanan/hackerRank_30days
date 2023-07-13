<?php
/**
 * Task
 * Given a Book class and a Solution class, write a MyBook class that does the following:
 * Inherits from Book
 * Has a parameterized constructor taking these 3 parameters:
 * 1. string $title
 * 2. string $author
 * 3. int $price 
 * 
 * Implements the Book class' abstract display() method so it prints these  lines:
 * 1. Title:, a space, and then the current instance's $title.
 * 2. Author:, a space, and then the current instance's $author.
 * 3. Price:, a space, and then the current instance's $price.
 * 
 * Note: Because these classes are being written in the same file, you must not use an access modifier (e.g.: ) when declaring MyBook or your code will not execute.
 * Sample Input:
 * The Alchemist
 * Paulo Coelho
 * 248
 * 
 * Sample Output: The following output is printed by your display() method:
 * Title: The Alchemist
 * Author: Paulo Coelho
 * Price: 248
 * */

// Create an Abstract Class Book
abstract class Book {
    protected $title;
    protected $author;
    function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
    // Create an abstract method
    abstract protected function display();
}

// Create a Sub-class that will implement the abstract class
class MyBook extends Book {
    private int $price;
    public function __construct($title, $author, $price) {
        parent::__construct($title, $author);
        $this->price = $price;
    }
    // Implement the abstract method here..
    public function display() {
        echo "Title: " . $this->title . "\n";
        echo "Author: " . $this->author . "\n";
        echo "Price: " . $this->price . "\n";
    }
}

// Instantiating the SubClass
$book = new MyBook("The Alchemist", "Paulo Coelho", 248);
$book->display();

echo "\n------\n";

$book2 = new MyBook("Poor Dad Rich Dad","Robert Kiyosaki",500);
$book2->display();