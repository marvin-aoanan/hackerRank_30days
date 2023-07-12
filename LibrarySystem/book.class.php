<?php

class Book {
    private $title;
    private $author;
    private $borrowed;
    private $dueDate;
    
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        $this->borrowed = false;
        $this->dueDate = null;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function isBorrowed() {
        return $this->borrowed;
    }
    
    public function getDueDate() {
        return $this->dueDate;
    }
    
    public function borrow($dueDate) {
        if ($this->borrowed) {
            echo "This book is already borrowed.";
        } else {
            $this->borrowed = true;
            $this->dueDate = $dueDate;
            echo "You have successfully borrowed the book '{$this->title}'.";
        }
    }
    
    public function returnBook() {
        if ($this->borrowed) {
            $this->borrowed = false;
            $this->dueDate = null;
            echo "You have successfully returned the book '{$this->title}'.";
        } else {
            echo "This book is not currently borrowed.";
        }
    }
    
    public function calculateLateFee() {
        if ($this->borrowed && $this->dueDate != null) {
            $currentDate = date('Y-m-d');
            if ($currentDate > $this->dueDate) {
                $daysLate = (strtotime($currentDate) - strtotime($this->dueDate)) / (60 * 60 * 24);
                $lateFee = $daysLate * 0.50; // Assuming late fee is $0.50 per day
                echo "You have a late fee of $".number_format($lateFee, 2)." for the book '{$this->title}'.";
            } else {
                echo "No late fee for the book '{$this->title}'.";
            }
        } else {
            echo "This book is not currently borrowed.";
        }
    }
}

// Create books
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");

// Borrow a book
$book1->borrow('2023-07-20');

// Return a book
$book1->returnBook();

// Calculate late fee
$book2->borrow('2023-07-10');
$book2->calculateLateFee();

?>
