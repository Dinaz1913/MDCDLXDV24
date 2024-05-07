<?php


// Exercise #8


class NumberSquare {
    public function printSquare($min, $max) {
        for ($i = $min; $i <= $max; $i++) {
            for ($j = $i; $j <= $max; $j++) {
                echo $j;
            }
            for ($k = $min; $k < $i; $k++) {
                echo $k;
            }
            echo "\n";
        }
    }

    public function run() {
        echo "Min? ";
        $min = intval(trim(fgets(STDIN)));
        echo "Max? ";
        $max = intval(trim(fgets(STDIN)));
        $this->printSquare($min, $max);
    }
}

$numberSquare = new NumberSquare();
$numberSquare->run();