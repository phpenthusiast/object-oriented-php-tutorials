<?php
class User 
{
    // The class properties
    public $firstName;
    
    // A method that says hello to the user $firstName
    // The user $firstName property can be approached 
    //   with the $this keyword.
    public function hello()
    {
        return "hello, " .  $this -> firstName;
    }
}
