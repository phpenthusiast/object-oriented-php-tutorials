<?php
class User 
{
    // The class properties.
    public $firstName;
    
    // A method that says hello to the user $firstName.
    public function hello()
    {
        echo "hello, " .  $this -> firstName;
        return $this;
    }
    
    // A method to register the user.
    public function register()
    {
        echo " >> registered";
    }
    
    // A method to send the welcome email.
    public function mail()
    {
        echo " >> email sent";
    }
}
