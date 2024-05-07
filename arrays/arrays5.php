<?php


function displayBoard($board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]}\n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]}\n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]}\n";
}

function checkWinner($board)
{
    // Check rows
    foreach ($board as $row) {
        if (count(array_unique($row)) === 1 && $row[0] !== ' ') {
            return true;
        }
    }

    // Check columns
    for ($i = 0; $i < 3; $i++) {
        if ($board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i] && $board[0][$i] !== ' ') {
            return true;
        }
    }

    // Check diagonals
    if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2] && $board[0][0] !== ' ') {
        return true;
    }
    if ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0] && $board[0][2] !== ' ') {
        return true;
    }

    return false;
}

function ticTacToe()
{
    $board = array_fill(0, 3, array_fill(0, 3, ' '));
    $player = 'X';

    while (true) {
        displayBoard($board);
        echo "Player $player, enter row (0, 1, 2): ";
        $row = (int)readline();
        echo "Player $player, enter column (0, 1, 2): ";
        $col = (int)readline();

        if ($board[$row][$col] === ' ') {
            $board[$row][$col] = $player;
            if (checkWinner($board)) {
                displayBoard($board);
                echo "Player $player wins!" . PHP_EOL;
                break;
            }
            $isTie = true;
            foreach ($board as $row) {
                if (in_array(' ', $row)) {
                    $isTie = false;
                    break;
                }
            }
            if ($isTie) {
                displayBoard($board);
                echo "It's a tie!" . PHP_EOL;
                break;
            }
            $player = ($player === 'X') ? 'O' : 'X';
        } else {
            echo "That spot is already taken. Try again." . PHP_EOL;
        }
    }
}

// Call the function to display the initial board
displayBoard(array_fill(0, 3, array_fill(0, 3, ' ')));

// Start the game
ticTacToe();


