<?php
class User 
{
    private $firstName;
    
    // A public setter method allows us to set the 
    //   $firsName property
    public function setFirstName($str)
    {
        $this -> firstName = $str;
    }

    // A public getter method allows us to return the 
    //   $firsName property
    public function getFirstName()
    {
        return $this -> firstName;
    }
}
