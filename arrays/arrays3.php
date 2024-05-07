<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

$SearchValue =readline();

$ArraySearch = array_search($SearchValue, $numbers);

if ($ArraySearch !== false) {
    echo "The value '$SearchValue' was found at index '$ArraySearch'." . "\n";
} else {
    echo "The value '$SearchValue' was not found in the array." . "\n";
}

//todo check if an array contains a value user entered