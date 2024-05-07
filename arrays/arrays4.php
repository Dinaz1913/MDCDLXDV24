<?php


$array = [];

for ($i = 0; $i < 10; $i++)
{
    $RandomNumber = rand(1,100);
    $randomNumber = rand(1,100);
// if $RandomNumber would be used outside
// loop it had been used fixed value
$key = $i;

$value = ($i % 2 == 0) ? $randomNumber : $RandomNumber;
$array[$key] = $value;
}
$CopyArray = [];
foreach ($array as $key => $Array)
{
    $CopyArray[$key] = $Array;
}

$array[9] = -7;
print_r($array);
print_r($CopyArray);