<?php
/* Exercise #6  */


$counter = 1;

while ($counter <= 110) {
    for ($i = 0; $i < 11; $i++) {
        $x = 3/5;
        $number = $counter + $i;
        if ($number % 3 === 0 && $number % 5 === 0) {// find operator presidence
            echo "CozaLoza ";
        } elseif ($number % 3 === 0) {
            echo "Coza ";
        } elseif ($number % 5 === 0) {
            echo "Loza ";
        } elseif ($number % 7 === 0) {
            echo "Woza ";
        } else {
            echo $number . " ";
        }
    }
    echo "\n";
    $counter += 11;
}

print "\n";

