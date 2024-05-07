<?php

declare(strict_types = 1);
class Person
{
public string $firstName;
public string $lastName;
public int $age;

public function __construct(string $firstName, string $lastName, int $age)
{
   $this->firstName = $firstName;
   $this->lastName = $lastName;
   $this->age = $age;
}

public function AgeCompatability(int $CompareAge)
{
    if ($this->age <= $CompareAge) {
        return "Not old Yet! \n";
    } else {
        return "This person is Adult. \n";
    }
}
}

