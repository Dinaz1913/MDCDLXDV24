<?php

//Exercise 1
declare(strict_types=1);

$value1 = readline("Write the value: ");
$value2 = readline("Write the value: ");

// Validate if input values are integers
if (!is_numeric($value1) || !is_numeric($value2) ||
    !is_int((int)$value1) || !is_int((int)$value2)) {
    echo "Input values must be integers. Exiting... \n";
    exit;
}

// Convert input values to integers
$value1 = (int)$value1;
$value2 = (int)$value2;

switch (true) {
    case ($value1 === 15 || $value2 === 15):
    case ($value1 + $value2 === 15):
    case (abs($value1 - $value2) === 15):
        echo 'True' . "\n Bye! \n";
        break;
    default:
        echo 'False'. "\n Bye! \n";
        break;
}


//exercise 2


function CheckOddEven(int $numbers):string {
     if (($numbers % 2) !== 0) {
        return "Odd Number". "\n Bye! \n";
    } elseif ($numbers % 2 === 0) {
        return 'Even Number' . "\n Bye! \n";
    } return CheckOddEven($numbers);
}

$number = 9;
echo CheckOddEven($number);
print "\n";
print "\n";


// exercise 3

function formulaOfBounds($NumberOfTerms, $LowerBound, $UpperBound) {
    return "The sum of $LowerBound to $UpperBound is" . ' ' .
        $result = ($NumberOfTerms/2) * ($LowerBound + $UpperBound) . "\n" .
            "The average is" . ' ' . $result2 = ($NumberOfTerms/2)
                * ($LowerBound + $UpperBound)/$UpperBound;

}

$FormulaOfSummingNumbers =
    formulaOfBounds(100, 1, 100);
echo $FormulaOfSummingNumbers;
print "\n";
print "\n";


//exercise 4



    $LowerLimitOfFactorialNumber = 1;
    $UpperLimitOfFactorialNumber = 10;

    for($i = 1; $i <=$UpperLimitOfFactorialNumber ; $i++){
        $LowerLimitOfFactorialNumber *= $i;
    }
$ResultOfFactorialNumber = $LowerLimitOfFactorialNumber;

    echo $ResultOfFactorialNumber;
echo "\n";
echo "\n";


// exercise #5


function randomNumber(int $ranNum):string
{
    static $CountCalls = 0;
    $CountCalls++;
    $random1to100 = (int)rand(1, 100);
    if ($CountCalls <= 3) {
        if ($random1to100 === $ranNum) {
            return "I'm thinking of a number between 1-100. Try to guess it. 
            > $ranNum 
            You guessed it! What are the odds?!? . \n";
        } elseif ($random1to100 !== $ranNum && $random1to100 < $ranNum) {
            return "I'm thinking of a number between 1-100. Try to guess it.  
            > $ranNum 
            Sorry, you are too high . I was thinking of $random1to100 . \n";
        } elseif ($random1to100 !== $ranNum && $random1to100 > $ranNum) {
            return "I'm thinking of a number between 1-100. Try to guess it. 
            > $ranNum 
            Sorry, you are too low . I was thinking of $random1to100 . \n";
        }
    } else {
        return "You can't guess for now!";
    } return randomNumber($ranNum);
}

echo randomNumber(6);
echo randomNumber(12);
echo randomNumber(99);


// Exercise #6
// coza-loza-woza.php


// Exercise #7


$GravityFormulaParameters = [
    [
        'acceleration' => -9.81,
        'Time' => 10,
        'InitialVelocity' => 0,
        'InitialPosition' => 0,
    ]
];

foreach ($GravityFormulaParameters as $parameters) {
    $displacement = 0.5 * $parameters['acceleration'] *
        pow((float)$parameters['Time'], 2)
        + $parameters['InitialVelocity'] * $parameters['Time']
        + $parameters['InitialPosition'];
    echo "Displacement: " . $displacement . "\n";
}
print "\n";


// Exercise #8


$EmployeePayment = [
    'Employee 1' => ['BasePay' => 7.50, 'HoursWorked' => 35.00],
    'Employee 2' => ['BasePay' => 8.20, 'HoursWorked' => 47.00],
    'Employee 3' => ['BasePay' => 10.00, 'HoursWorked' => 73.00],
];

$newArray = [];

foreach ($EmployeePayment as $employeeName => $employeeData) {
    if ($employeeData['BasePay'] <= 8) {
        echo " Error! " . $employeeName . "\n";
    } elseif ($employeeData['HoursWorked'] > 60){
        echo " Error! " . $employeeName . "\n";
    } elseif ($employeeData['HoursWorked'] < 60 ) {
        $newArray[$employeeName] =  $employeeData;
       $EmployeePayWithoutBonus =  $employeeData['BasePay'] *
           $employeeData['HoursWorked'];
       $AdditionalHoursWorked =  $employeeData['HoursWorked'] - 40;
       $AdditionalBonusPay = $AdditionalHoursWorked *
           ($employeeData['BasePay'] * 1.5);
       $EmployeePay = $EmployeePayWithoutBonus +
           $AdditionalBonusPay;

        echo " " .  $employeeName . " : "
            . $EmployeePay . " Dollars" .  "\n";

    }
}
print "\n";


// Exercise #9
// Exercise #10
// Both Exercises are in file: : "9arithmetic-operators.php"





/*  Arithmetic operations  */

/*
declare(strict_types=1);

// Exercise 1

$number = (int)readline("Enter the first number: ");
$number2 = (int)readline("Enter the second number: ");


$result = ($number === 15 || $number2 === 15 ||
    abs($number - $number2) === 15 ||
    $number + $number2 === 15);

echo $result? "true!" . " \n Bye!" : "false" . "\n Bye!";
echo "\n";


// Exercise 2


$CheckOddEven = (int)readline("Enter the first number: ");

echo $CheckOddEven % 2 === 0 ? "Even Number" : "Odd Number";
echo "\n";


// Exercise 3
*/

