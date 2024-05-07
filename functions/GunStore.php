<?php
// Exercise #7


class Person {
    public $name;
    public $licenses;
    public $cash;

    public function __construct($name, $licenses, $cash) {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }
}

class Gun {
    public $name;
    public $licenseType;
    public $price;

    public function __construct($name, $licenseType, $price) {
        $this->name = $name;
        $this->licenseType = $licenseType;
        $this->price = $price;
    }
}

$person = new Person("Mark Wahlberg", ["A", "B"], 1200);

$guns = [
    new Gun("DesertEagle", "A", 500),
    new Gun("AR Rifle", "B", 1000),
    new Gun("Shotgun", "C", 1500)
];

function canBuyGun($person, $gun) {
    if (in_array($gun->licenseType, $person->licenses) && $person->cash >= $gun->price) {
        return true;
    } else {
        return false;
    }
}

foreach ($guns as $gun) {
    if (canBuyGun($person, $gun)) {
        echo $person->name . " can buy " . $gun->name . " for $" . $gun->price . "\n";
    } else {
        echo $person->name . " cannot buy " . $gun->name . "\n";
    }
}
