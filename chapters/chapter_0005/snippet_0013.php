<?php
class User 
{
    private $firstName;
    private $lastName;

    // Constructor function to set more than one value
    public function __construct($firstName,$lastName)
    {
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }

    public function getFullName()
    {
        return $this -> firstName . ' ' . $this -> lastName;
    }
}

$user1 = new User("John", "Doe");

echo $user1 -> getFullName();
