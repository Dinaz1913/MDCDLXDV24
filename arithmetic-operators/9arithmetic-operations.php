<?php

declare(strict_types=1);
// Exercise #9


$LengthValue = (float)readline("Write your Height:  ");
$Unit = (string)readline
("Select unit in meters(m), centimeters(cm) or millimeters(mm): ");

$ConvertedValue = function (float $LengthValue, string $Unit) {
    if ($LengthValue < 0) {
        echo "Error! Height cannot be negative.";
    } else {
        function findDecimalPointPosition($floatNumber)
        {
            $floatStr = strval($floatNumber);
            $dotPosition = strpos($floatStr, '.');
            if ($dotPosition === false) {
                return "No decimal point found";
            } else {
                return ($dotPosition + 1);
            }
        }

        if ($Unit == "m") {
            // Convert meters to inches
            if (findDecimalPointPosition($LengthValue) === 1) {
                //
                return $LengthValue / 0.0254;
            } else {
                //
                return $LengthValue * 39.3701;
            }
        } elseif ($Unit == "cm") {
            // Convert centimeters to inches
            return $LengthValue / 2.54;
        } elseif ($Unit == "mm") {
            // Convert millimeters to inches
            return $LengthValue / 25.4;
        } else {
            return "Invalid unit!";
        }
    }
};

echo "Converted value: "
    . $ConvertedValue($LengthValue, $Unit)
    . " In" . "\n";
print "\n";

$WeightValue = (float)
readline("Write your weight in kilograms or grams: ");
$Unit = (string)
readline("Select unit in kilograms (kg) or grams (g): ");

$ConvertedValue = function (float $WeightValue, string $Unit) {
    if ($WeightValue < 0) {
        echo "Error! Weight cannot be negative.";
    } else {
        if ($Unit == "kg") {
            // Convert kilograms to pounds
            return $WeightValue * 2.20462;
        } elseif ($Unit == "g") {
            // Convert grams to pounds
            return $WeightValue * 0.00220462;
        } else {
            return "Invalid unit!";
        }
    }
};

echo "Converted value: " . $ConvertedValue($WeightValue, $Unit)
    . " lbs" . "\n";
print "\n";

$BodyMassIndex = ( $ConvertedValue($WeightValue, $Unit) * 703)
    / pow($ConvertedValue($LengthValue, $Unit), 2);

switch ($BodyMassIndex){
    case $BodyMassIndex < 25 && $BodyMassIndex < 18.5:
        echo "Person is normal weight! " . "\n";
        break;
        case $BodyMassIndex < 18.5 :
            echo "Person is underweight! " . "\n";
            break;
            case $BodyMassIndex > 25 :
                echo "Person is overweight! " . "\n";
                break;
}
print "\n";
print "\n";


// Exercise #10


$TextOfGeometryCalculator = "Calculate the Area of a Circle" .
    "\n" . "Calculate the Area of a Rectangle" . "\n" .
    "Calculate the Area of a Triangle" . "\n" .
    "Quit" . "\n";

echo $TextOfGeometryCalculator;
$ChosenNumber = (int)readline
    ("Enter your choice (1-4):  ") . "\n";
if ( $ChosenNumber > 4 ) {
    echo "Error! Choose a number from 1 to 4 ."
        . "\n";
} elseif ($ChosenNumber < 0) {
    echo "Error! Choose a number from 0 to 4 ." .
        "\n";
} else {
    class GeometryCalculator
    {

        /**
         * @throws Exception
         */
        public static function
        AreaOfCircle(int $radius)
        {
            if ($radius > 0) {
                return pi() * $radius ** 2;
            }
            throw new Exception("Error!");
        }

        /**
         * @throws Exception
         */
        public static function AreaOfRectangle
        (float $Length, float $Width): float
        {
            if ($Length > 0 && $Width > 0) {
                return $Length * $Width;
            }
            throw new Exception("Error!");
        }

        /**
         * @throws Exception
         */
        public static function
        AreaOfTriangle(int $Base, int $Height): float
        {
            if ($Base > 0 && $Height > 0) {
                return $Base * $Height * 0.5;
            }
            throw new Exception("Error!");
        }

    }

    try {
        switch ($ChosenNumber) {
            case 1:
                echo GeometryCalculator::AreaOfCircle((int)
                    readline("Enter radius: ")) . "\n";
                break;
            case 2:
                echo GeometryCalculator::AreaOfRectangle((float)
                    readline("Enter length: "), (float)
                    readline("Enter width: ")) . "\n";
                break;
            case 3:
                echo GeometryCalculator::AreaOfTriangle((int)
                    readline("Enter base: "), (int)
                    readline("Enter height: ")) . "\n";
                break;
            case 4:
                echo "Goodbye!" . "\n";
                break;
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
