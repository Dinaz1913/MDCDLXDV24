<?php

$ChosenElement = readline("Enter your choice
 (Scissors, Paper, Rock, Lizard, Spock): ");

if (ucwords($ChosenElement) !== $ChosenElement) {
    $ChosenElement = ucwords($ChosenElement);
}// if there will be lowercase words

$ElementsToChoose = ['Scissors', 'Paper', 'Rock', 'Lizard', 'Spock'];
if (!in_array($ChosenElement, $ElementsToChoose)) {
    echo "Invalid choice! Please choose from Scissors, Paper, Rock, Lizard, or Spock.";
    exit; // If word outputs wrong it will exit!(code)
}

$OpponentKeyElement = array_rand($ElementsToChoose);
$OpponentsCharacter = $ElementsToChoose[$OpponentKeyElement];

function findArrayName($Name, $GamingCharacters) {
    foreach ($GamingCharacters as $characterName => $characterArray) {
        if ($Name === $characterName) {
            return $characterArray;
        }
    }
    return null;
}

$Scissors = [
    'Win1' => 'Paper',
    'Win2' => 'Lizard',
    'Lose1' => 'Spock',
    'Lose2' => 'Rock',
    'Draw' => 'Scissors',
];

$Paper = [
    'Win1' => 'Rock',
    'Win2' => 'Spock',
    'Lose1' => 'Scissors',
    'Lose2' =>  'Lizard',
    'Draw' => 'Paper',
];

$Rock = [
    'Win1' => 'Lizard',
    'Win2' => 'Scissors',
    'Lose1' => 'Spock',
    'Lose2' =>  'Paper',
    'Draw' => 'Rock',
];

$Lizard = [
    'Win1' => 'Spock',
    'Win2' =>  'Paper',
    'Lose1' => 'Scissors',
    'Lose2' =>  'Rock',
    'Draw' => 'Lizard',
];

$Spock = [
    'Win1' => 'Scissors',
    'Win2' => 'Rock',
    'Lose1' => 'Lizard',
    'Lose2' => 'Paper',
    'Draw' => 'Spock',
];

$GamingCharacters = [
    'Scissors' => $Scissors,
    'Paper' => $Paper,
    'Rock' => $Rock,
    'Lizard' => $Lizard,
    'Spock' => $Spock
];

$NameMatch = findArrayName($OpponentsCharacter, $GamingCharacters);

function Result($ChosenElement, $NameMatch) {
    if ($NameMatch !== null) {
        foreach ($NameMatch as $key => $value) {
            if ($value === $ChosenElement) {
                return $key;
            }
        }
    } else {
        echo "Array not found!.";
    }
    return null;
}


$ResultOfOpponentFinal = Result($ChosenElement, $NameMatch);


switch ($ResultOfOpponentFinal) {
    case 'Win1':
    case 'Win2':
        echo readline("You lost this game & Opponent choose: $OpponentsCharacter");
        break;

    case 'Lose1':
    case 'Lose2':
        echo readline("You Won this game & Opponent choose: $OpponentsCharacter");
        break;

    case 'Draw':
        echo readline("This Game is Draw!");
        break;

    default:
        echo "Unexpected result: $ResultOfOpponentFinal";
}
