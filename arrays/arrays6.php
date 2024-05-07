<?php

// Hangman a like game
// Exercise #6
// Hangman a like game

$ListOfWords = [
    "Sherlock", "Doctor", "Fridge",
    "Chemistry", "Physics", "Java",
    "PHP", "Guitar", "Symphony"
];

function selectRandomWord($wordList) {
    $randomIndex = array_rand($wordList);
    return $wordList[$randomIndex];
}

function displayWord($word, $guessedLetters) {
    $display = "";
    foreach (str_split($word) as $letter) {
        if (in_array(strtolower($letter),
            $guessedLetters)) {
            $display .= $letter . " ";
        } else {
            $display .= "_ ";
        }
    }
    return $display;
}

$randomWord = selectRandomWord($ListOfWords);
$guessedLetters = [];
$triesLeft = 6;

echo "Welcome to Hangman!\n";
echo "You have $triesLeft tries to guess the word.\n";

while ($triesLeft > 0) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";

    echo "Word:\t" . displayWord($randomWord,
            $guessedLetters) . "\n";

    echo "Misses:\t" . implode(" ",
            array_diff($guessedLetters,
                array_map('strtolower',
                    str_split($randomWord)))) . "\n";

    $guess = strtolower(readline("Guess:\t"));

    if (strlen($guess) !== 1 || !ctype_alpha($guess)) {
        echo "Please enter a single letter.\n";
        continue;
    }

    if (in_array($guess, $guessedLetters)) {
        echo "You already guessed that letter.\n";
        continue;
    }

    $guessedLetters[] = $guess;

    if (in_array(strtolower($guess),
        array_map('strtolower',
        str_split($randomWord)))) {
        echo "Correct guess!\n";
    } else {
        echo "Incorrect guess!\n";
        $triesLeft--;
    }

    if (implode('',
            array_intersect(array_map('strtolower',
                str_split($randomWord)), $guessedLetters))
        === strtolower($randomWord)) {
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";
        echo "YOU GOT IT!\n";
        break;
    }

    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";
    echo "Tries left: $triesLeft\n";
}

if ($triesLeft === 0) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";
    echo "Sorry, you ran out of tries."
        ." The word was: $randomWord\n";
}
