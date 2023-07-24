<?php

/**
 * For storage:
 * 0 | 1 | 2
 * ----------
 * 3 | 4 | 5
 * ----------
 * 6 | 7 | 8
 * 
 * For the User
 * 1 | 2 | 3
 * ----------
 * 4 | 5 | 6
 * ----------
 * 7 | 8 | 9
 * 
 * UI Picture of Game
 * | - | - | - |
 * -----------
 * | - | - | - |
 * -----------
 * | - | - | - |
 * 
 * Gamepaly:
 * | O | - | - |
 * -----------
 * | - | X | - |
 * -----------
 * | - | - | O |
 */
class TicTacToe
{
    public $board = [];
    public $userMarker;
    public $aiMarker;
    public $winner = '-';
    public $currentMarker;
    public function __construct($playerToken, $aiMarker)
    {
        $this->userMarker = $playerToken;
        $this->aiMarker = $aiMarker;
        $this->board = $this->setBoard();
        $this->currentMarker = $this->userMarker;
        $this->winner;
    }

    public function setBoard()
    {
        $board = [9];
        for ($x = 0; $x < 9; $x++) {
            $board[$x] = '-';
        }
        return $board;
    }
    public function playTurn($spot)
    {
        $isValid = $this->withinRange($spot) && !$this->isSpotTaken($spot);
        if ($isValid) {
            $this->board[$spot - 1] = $this->currentMarker;
            $this->currentMarker = ($this->currentMarker == $this->userMarker) ? $this->aiMarker : $this->userMarker;
        }
        return $isValid;
    }
    public function withinRange($number)
    {
        return $number > 0 && $number < (count($this->board) + 1);
    }
    public function isSpotTaken($number)
    {
        return $this->board[($number - 1)] != '-';
    }
    public function printBoard()
    {
        // | - | - | - |
        // -------------
        // | - | - | - |
        // -------------
        // | - | - | - |
        echo "\n";
        for ($x = 0; $x < count($this->board); $x++) {
            if ($x % 3 == 0 && $x != 0) {
                echo "\n";
                echo "-------------\n";
            }
            echo " | " . $this->board[$x];
        }
        echo "\n";
    }
    public function printIndexBoard()
    {
        echo "\n";
        for ($x = 0; $x < count($this->board); $x++) {
            if ($x % 3 == 0 && $x != 0) {
                echo "\n";
                echo "-------------\n";
            }
            echo " | " . ($x + 1);
        }
        echo "\n";
    }
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }
    public function getWinner()
    {
        return $this->getWinner();
    }
    public function isthereAWinner()
    {
        $diagonalsAndMiddles = ($this->rightDiag() || $this->leftDiag() || $this->midRow() || $this->secCol()) && $this->board[4] != '-';
        $topAndFirst = ($this->topRow() || $this->firstCol()) && $this->board[0] != '-';
        $bottomAndThird = ($this->botRow() || $this->thirdCol()) && $this->board[8] != '-';

        if ($diagonalsAndMiddles) {
            $this->winner = $this->board[4];
        } else if ($topAndFirst) {
            $this->winner = $this->board[0];
        } else if ($bottomAndThird) {
            $this->winner = $this->board[8];
        }
        return $diagonalsAndMiddles || $topAndFirst || $bottomAndThird;
    }
    public function topRow()
    {
        if (($this->board[0] == $this->board[1]) && ($this->board[1] == $this->board[2])) {
            return true;
        };
    }
    public function midRow()
    {
        return ($this->board[3] == $this->board[4]) && ($this->board[4] == $this->board[5]);
    }
    public function botRow()
    {
        return ($this->board[6] == $this->board[7]) && ($this->board[7] == $this->board[8]);
    }
    public function firstCol()
    {
        return ($this->board[0] == $this->board[3]) && ($this->board[3] == $this->board[6]);
    }
    public function secCol()
    {
        return ($this->board[1] == $this->board[4]) && ($this->board[4] == $this->board[7]);
    }
    public function thirdCol()
    {
        return ($this->board[2] == $this->board[5]) && ($this->board[5] == $this->board[8]);
    }
    public function rightDiag()
    {
        if (($this->board[0] == $this->board[4]) && ($this->board[4] == $this->board[8])) {
            return true;
        }
    }
    public function leftDiag()
    {
        return ($this->board[2] == $this->board[4]) && ($this->board[4] == $this->board[6]);
    }
    public function isTheBoardFilled()
    {
        for ($x = 0; $x < 9; $x++) {
            if ($this->board[$x] == '-') {
                return false;
            }
        }
    }
    public function gameOver()
    {
        $didSomeoneWin = $this->isthereAWinner();
        if ($didSomeoneWin) {
            return "We have a winner! The winner is " . ucfirst($this->winner) . "'s.";
        } else if ($this->isTheBoardFilled()) {
            return "Draw: Game Over!";
        } else {
            return "notOver";
        }
    }
}

class AI
{
    public function pickSpot($game)
    {
        $choices = $game->board;
        $unUsedSpot = array_keys($choices, '-');
        if(!empty($unUsedSpot)) {
            $choice = array_rand($unUsedSpot);
            return $unUsedSpot[$choice] + 1; 
        }
        
    }
}

$doYouWantToPlay = true;
while ($doYouWantToPlay) {
    echo "Welcome to Tic Tac Toe! You are about to play against the Master of Tic Tac Toe. \n" 
        . "Are you ready? I hope so! But first, you must pick what character you want to be and which character I will be. \n";
    echo "Enter a single character that will represent you on the board: ";
    $playerToken = trim(readline()[0]);
    echo "Enter a single character that will represent your opponent on the board: ";
    $opponentToken = trim(readline()[0]);

    $game = new TicTacToe($playerToken, $opponentToken);
    $ai = new AI;

    // Set up the game
    echo "\nWe can now start the game. To play, enter a number \n"
        . "and your token shall be put in it's place \n"
        . "The numbers go from 1-9, left to right. \n"
        . "We shall see who will win this round.";

    $game->printIndexBoard();
    // echo "\n Let's play!!!";
    while ($game->gameOver() == "notOver") {
        if ($game->currentMarker == $game->userMarker) {
            echo "It's your turn, Enter a spot for your token. ";
            $spot =  trim(readline());
            while (!$game->playTurn($spot)) {
                echo "Try again, $spot is invalid. This spot is already taken or out of range.";
                $spot =  trim(readline());
            }
            echo "You picked $spot!";
        } else {
            // AI Turn
            echo "\nIt's now my turn and ";
            // Ai pick spot
            $aiSpot = $ai->pickSpot($game);
            $game->playTurn($aiSpot);
            echo "I picked $aiSpot!";
        }
        // Print out new board
        echo "\n";
        $game->printBoard();
        echo "\n";
    }
    echo $game->gameOver();
    echo "\n";
    // Set up a new game... or not!
    echo "Do you want to play again? Enter Y or y if you do."
        . " Enter anything else if you are tired of me. ";
    $response = trim(readline()[0]);
    $doYouWantToPlay = ($response == "Y" || $response == "y");
    echo "\n";
}
