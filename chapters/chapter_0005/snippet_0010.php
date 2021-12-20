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
}
