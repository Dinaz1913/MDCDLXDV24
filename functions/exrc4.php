<?php

require_once '../untitled/Person.php';

$people = [
    new Person("John", "Vasilios", 50),
    new Person("Alice", "Keys", 45),
    new Person("Bean", "Tiesel", 16)
];

//var_dump($people);

foreach ($people as $person) {
    echo $person->firstName . ": " . $person->AgeCompatability(18) . "\n";
}