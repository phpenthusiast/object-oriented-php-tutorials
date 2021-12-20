<?php
class User 
{
    private $firstName;
    private $lastName;

    // Constructor function to set a single value
    public function __construct($firstName)
    {
        $this -> firstName = $firstName;
    }
}
