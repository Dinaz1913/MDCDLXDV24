<?php


// Exercise 1
function AcceptString(string $Value):string {
return "$Value Codlex \n";
}

echo AcceptString('Hello World');


// Exercise 2

function BasicMultiply(int $value, int $value2): int {
   return $value * $value2 ;
}

echo BasicMultiply(15,10) . "\n";


// Exercise 3


require_once '../untitled/Person.php';

$Person = new Person('David', 'Haselhoff', 45);

echo  $Person ->AgeCompatability(18);

var_dump($Person -> firstName). "\n";
echo ($Person -> lastName). "\n";
echo ($Person -> age). "\n";


// Exercise 4
// in the exrc4.php file


//exercise 5


$FruitsWeightPerPieceKg = [
    'Apple' => ['weight' => 0.195],
    'Apricot ' => ['weight' => 0.035],
    'Avocado ' => ['weight' => 0.175],
    'Banana' => ['weight' => 0.120],
    'Grapes' => ['weight' => 0.005],
];

function totalWeight(array $kilograms):float
{
$totalWeight = 0;

foreach ($kilograms as $kilogramsTotal) {
    $totalWeight += $kilogramsTotal['weight'];
}

return $totalWeight;
}
$WeightOfFruitsPerPieceTogether = totalWeight($FruitsWeightPerPieceKg);
echo "Total weight of fruits: " . totalWeight($FruitsWeightPerPieceKg) . " kg" . "\n";


function CategoryOfWeight(array $kilograms): string {
    foreach ($kilograms as $Weight) {
        if ($Weight['weight'] >= 10) {
            return 'Fruit has weight over 10 kg';
        }
    }
    return 'All fruits have weight lower than 10 kg' . "\n";
}

echo CategoryOfWeight($FruitsWeightPerPieceKg);

$coastsPerKg = [
    'Apples' => ['Dollar/kg' => 1.35],
    'Apricots ' => ['Dollar/kg' => 1.20],
    'Avocados ' => ['Dollar/kg' => 2.25],
    'Bananas' => ['Dollar/kg' => 0.30],
    'Grapes' => ['Dollar/kg' => 1.15],
];

foreach ($coastsPerKg as $fruit => $value) {
    for ($i = 1; $i <= 10; $i++) {
        switch ($i) {
            case 10:
                echo '10'." kg ".$fruit . ": " . ($value['Dollar/kg'] * $i + 2) . " Dollars" . " \n";
                break;
            default:
                echo $i ." kg ".$fruit . ": " . ($value['Dollar/kg'] * $i + 1) . " Dollars" . " \n";
                break;
        }
    }
}


// Exercise 6

function multiply($array, int $number)
{
    if(is_int($array) || is_float($array)) {
        return $array * $number;
    } return $array;
}
$ArrayWith5Elements = [3, 6, 10, 6.393939, 'Dreams'];

for($i = 0; $i < count($ArrayWith5Elements); $i++){

echo multiply($ArrayWith5Elements[$i], 2) . "\n";
}


// exercise 7