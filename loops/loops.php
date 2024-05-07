<?php


//Exercise #1


$arrayOfNaturalNumbers = [1, 2, 3, 4, 5, 6, 7,
    8, 9,10,12, 13, 14, 15, 16, 17];
//$CountOfNaturalNumbers = count($arrayOfNaturalNumbers);
echo "The first 10 natural numbers are: " . "\n";
for ($i = 0; $i < 10 ; $i++) {
    echo $arrayOfNaturalNumbers[$i]  . "\n";
}
//todo write a program that displays first 10 natural numbers
echo "\n";


//Exercise #2


echo "Input number of terms: " . "\n";

for ($i = 0, $count = 0; $count < 5; $i++) {
    $i *= $i;
    echo $i . "\n";
    $count+= 1;
}

//todo complete loop to multiply i with itself n times,
// it is NOT allowed to use built-in pow() function
echo "\n";
echo "\n";


//Exercise #3


$Word1 = readline("Enter first word: ");
$Word2 = readline("Enter second word: ");
$LengthOfWord = strlen(trim($Word1)) + strlen($Word2);
$Symbol = ".";
$dots = "";
for ($i = 0; $i < 30 - $LengthOfWord; $i++) {
    $dots .= $Symbol;
}
echo $Word1 . $dots . $Word2 . "\n";
echo "\n";


//Exercise #4


class FizzBuzz
{
    public static function FizzBuzzFunction()
    {
        $ValueGiven = (int)readline
        ("Enter max value of number count: ");
        $Count = 0;
        for ($i = 1; $i <= $ValueGiven; $i++) {
            switch (true) {
                case ($i % 3 === 0 && $i % 5 === 0):
                    echo "FizzBuzz";
                    break;
                case ($i % 3 === 0):
                    echo "Fizz";
                    break;
                case ($i % 5 === 0):
                    echo "Buzz";
                    break;
                default:
                    echo $i . " ";
            }
            $Count++;
            if ($Count === 20) {
                echo "\n";
                $count = 0;
            }
        }
    }
}

FizzBuzz::FizzBuzzFunction();
echo "\n";
echo "\n";


//Exercise #5

class Piglet
{
    public static function PigletGame()
    {
        echo "Welcome to Piglet!\n";
        $GameStart =
            readline("Want to start a game (yes/no): ");
        $PointsWined = 0;

        while (strtolower($GameStart) === 'yes') {
            $RandomNumber = rand(1, 6);
            echo "You rolled " . $RandomNumber . "!\n";

            if ($RandomNumber === 1) {
                echo "You rolled a 1. Game over!"
                    . "You scored  0  points.\n";
                break;
            } else {
                $PointsWined+= $RandomNumber;
            }

            $GameStart =
                readline("Roll again? (yes/no): ");
            //another $GameStart variable to give choice if continue
            if (strtolower($GameStart) === 'no') {
                echo $PointsWined . "\n";
            }
        }
    }
}

Piglet::PigletGame();
print "\n";
print "\n";


// Exercise #6


class AsciiFigure
{
    public static function AsciiFigureFunction($size)
    {
        for ($i = 0; $i < $size; $i++) {
            // Draw / from left
            for ($j = 0; $j <
            ($size - $i - 1) * 4; $j++)
            {
                echo "/";
            }

            // Draw stars
            for ($j = 0; $j < $i * 8; $j++)
            {
                echo "*";
            }

            // Draw \ from right
            for ($j = 0; $j <
            ($size - $i - 1) * 4; $j++)
            {
                echo "\\";
            }

            echo "\n"; // Move to the next line
        }
    }
}
class Choice
{
const Size1 = 5;
const Size2 = 3;
const Size3 = 7;
}

$size = Choice::Size3;
AsciiFigure::AsciiFigureFunction($size);
print "\n";
print "\n";


//Exercise #7


class RollTheDice
{
    public static function RollDiceGame()
    {
        echo "Desired sum: 9\n";
        echo "Press Enter to start: ";
        $input = readline();
        $SumOfTwoNumbers = 0;

        if (empty($input)) {
            while (true) {
                $RandomNumber1 = rand(1, 6);
                $RandomNumber2 = rand(1, 6);
                $SumOfTwoNumbers = $RandomNumber1 + $RandomNumber2;

                echo "You rolled: $RandomNumber1 and $RandomNumber2\n";

                if ($SumOfTwoNumbers === 9) {
                    echo "You Won! Your Dice Score is: 9\n";
                    break;
                } else {
                    echo "Try again. Press Enter to roll again: ";
                    $input = readline();
                }
            }
        } else {
            echo "You pressed Enter to start!";
        }
    }
}


RollTheDice::RollDiceGame();


