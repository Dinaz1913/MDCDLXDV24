<?php


$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
foreach ($numbers as $number)
{
    echo $number . "\n";
}
echo "\n";

//todo
echo "Sorted numeric array: " . "\n";
sort($numbers);
foreach ($numbers as $sortedNumbers)
{
    echo $sortedNumbers . "\n";
}
print "\n";


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: " . "\n";
for($i = 0; $i < count($words); $i++)
{
    echo $words[$i] . "\n";
}
print "\n";
sort($words);
foreach ($words as $word)
{
    echo $word . "\n";
}
//todo
echo "Sorted string array: ";