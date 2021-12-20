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
