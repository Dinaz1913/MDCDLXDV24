<?php


function checkWinner($board)
{
    // Check rows and columns for winning combinations
    $sums = [];
    for ($i = 0; $i < 3; $i++) {
        $sums[] = array_sum($board[$i]); // Rows
        $sums[] = $board[0][$i] + $board[1][$i] + $board[2][$i]; // Columns
    }

    // Check diagonals
    $sums[] = $board[0][0] + $board[1][1] + $board[2][2]; // Top-left to bottom-right diagonal
    $sums[] = $board[0][2] + $board[1][1] + $board[2][0]; // Top-right to bottom-left diagonal

    if (in_array(3, $sums) || in_array(-3, $sums)) {
        return true; // Winner found
    }
    return false;
}

// Example usage:
$board = [
    [1, 0, -1], // Example board where 1 represents 'X', -1 represents 'O', and 0 represents empty
    [0, 1, 0],
    [0, 0, 1]
];

if (checkWinner($board)) {
    echo "Winner found!";
} else {
    echo "No winner yet.";
}

