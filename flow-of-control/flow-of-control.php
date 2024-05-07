<?php

// Exercise #1


$LargestNumber = PHP_INT_MAX;
echo "Input the 1st number: " . $LargestNumber . "\n";

$LargestNumberFloat = PHP_FLOAT_MAX;
echo "Input the 2nd number: " . $LargestNumberFloat . "\n";

$LargestNumberINF =  INF;
echo "Input the 3rd number: " . $LargestNumberINF  . "\n";

//todo print the largest number


// Exercise #2


$CheckNumberIfPositiveOrNegative = -5;
echo "Enter the number.";

switch ($CheckNumberIfPositiveOrNegative){
    case $CheckNumberIfPositiveOrNegative > 0:
        echo "Input is positive number." . "\n";
        break;
        case $CheckNumberIfPositiveOrNegative < 0:
            echo "Input is negative number." . "\n";
            break;
            case $CheckNumberIfPositiveOrNegative === 0;
            echo "input is 0." ."\n";
            break;
    default:
        echo "Not a number." . "\n";
        break;
}
//todo print if number is positive or negative
echo "\n";


// Exercise #3


$PositiveInteger = (int) readline("Enter the number: ");

if ($PositiveInteger > 0){
    echo countTheDigits($PositiveInteger) . "\n";
}
function countTheDigits($number):int
{
    return strlen((string)$number);
}
echo "\n";


// Exercise #4


$NumberOfDayInTheWeek = (int) readline("Enter the number from 1-7: ");

if ($NumberOfDayInTheWeek <= 7){
    switch ($NumberOfDayInTheWeek){
        case 1:
            echo "Today is Monday" . "\n";
            break;
            case 2:
                echo "Today is Tuesday" . "\n";
                break;
                case 3:
                    echo "Today is Wednesday" . "\n";
                    break;
                    case 4:
                        echo "Today is Thursday" . "\n";
                        break;
                        case 5:
                            echo "Today is Friday" . "\n";
                            break;
                            case 6:
                                echo "Today is Saturday" . "\n";
                                break;
                                case 7:
                                    echo "Today is Sunday" . "\n";
                                    break;
        default:
            echo "Number out of range ." . "\n";
    }
} if ($NumberOfDayInTheWeek == NAN
    && is_float($NumberOfDayInTheWeek)){
    echo "Unknown Number." . "\n";
}
echo "\n";


// Exercise #5


$InfoText = "	  ABC(2), DEF(3),
  GHI(4), JKL(5), MNO(6),
 PQRS(7), TUV(8), WXYZ(9).";
echo $InfoText . "\n";

$PhoneKeyPad =(int) readline
    ("Enter the number from 2 to 9: ") . "\n";

$Text = "";
if (strpos($PhoneKeyPad, '2') !== false) {
    switch ($PhoneKeyPad) {
        case 2:
            $Text .= "A";
            break;
        case 22:
            $Text .= "B";
            break;
        case 222:
            $Text .= "C";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '3') !== false) {
    switch ($PhoneKeyPad) {
        case 3:
            $Text .= "D";
            break;
        case 33:
            $Text .= "E";
            break;
        case 333:
            $Text .= "F";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '4') !== false) {
    switch ($PhoneKeyPad) {
        case 4:
            $Text .= "G";
            break;
        case 44:
            $Text .= "H";
            break;
        case 444:
            $Text .= "I";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '5') !== false) {
    switch ($PhoneKeyPad) {
        case 5:
            $Text .= "J";
            break;
        case 55:
            $Text .= "K";
            break;
        case 555:
            $Text .= "L";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '6') !== false) {
    switch ($PhoneKeyPad) {
        case 6:
            $Text .= "M";
            break;
        case 66:
            $Text .= "N";
            break;
        case 666:
            $Text .= "O";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '7') !== false) {
    switch ($PhoneKeyPad) {
        case 7:
            $Text .= "P";
            break;
        case 77:
            $Text .= "Q";
            break;
        case 777:
            $Text .= "R";
            break;
        case 7777:
            $Text .= "S";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '8') !== false) {
    switch ($PhoneKeyPad) {
        case 8:
            $Text .= "T";
            break;
        case 88:
            $Text .= "U";
            break;
        case 888:
            $Text .= "V";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} elseif (strpos($PhoneKeyPad, '9') !== false) {
    switch ($PhoneKeyPad) {
        case 9:
            $Text .= "W";
            break;
        case 99:
            $Text .= "X";
            break;
        case 999:
            $Text .= "Y";
            break;
        case 9999:
            $Text .= "Z";
            break;
        default:
            echo "Unknown Number." . "\n";
    }
} else {
    echo "Unknown Number." . "\n";
}

echo "Mapped text: $Text\n";
echo "\n";
echo "\n";



// vardu salikums
$InfoText = "	  ABC(2), DEF(3),
  GHI(4), JKL(5), MNO(6),
 PQRS(7), TUV(8), WXYZ(9).";
echo $InfoText . "\n";

$PhoneKeyPad = readline("Enter the number sequence from 2 to 9: ");
$Text = "";


$mappings = [
    '2' => 'A', '22' => 'B', '222' => 'C',
    '3' => 'D', '33' => 'E', '333' => 'F',
    '4' => 'G', '44' => 'H', '444' => 'I',
    '5' => 'J', '55' => 'K', '555' => 'L',
    '6' => 'M', '66' => 'N', '666' => 'O',
    '7' => 'P', '77' => 'Q', '777' => 'R', '7777' => 'S',
    '8' => 'T', '88' => 'U', '888' => 'V',
    '9' => 'W', '99' => 'X', '999' => 'Y', '9999' => 'Z',
];


$i = 0;
while ($i < strlen($PhoneKeyPad)) {
    $j = $i + 1;
    $number = $PhoneKeyPad[$i];

    // Find the multi-digit number
    while ($j < strlen($PhoneKeyPad) && $PhoneKeyPad[$j] == $number) {
        $j++;
    }

    // Append the corresponding letters to the result
    if (isset($mappings[str_repeat($number, $j - $i)])) {
        $Text .= $mappings[str_repeat($number, $j - $i)];
    } else {
        $Text .= $number;
    }

    $i = $j;
}

echo "Mapped text: $Text\n";
