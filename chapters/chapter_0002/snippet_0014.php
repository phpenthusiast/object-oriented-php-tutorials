<?php
class User 
{
    // The class properties
    public $firstName;
    public $lastName;

    // A method that says hello to the user
    public function hello()
    {
        return "hello, " .  $this -> firstName;
    }
}


// Create a new object
$user1 = new User();

// Set the user $firstName and $lastName properties
$user1 -> firstName = 'Jonnie';
$user1 -> lastName  = 'Roe';
