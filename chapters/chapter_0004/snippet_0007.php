<?php
class User 
{
    private $firstName;
    
    // A public setter method allows us to set the 
    //   $firsName property.
    public function setFirstName($str)
    {
        $this -> firstName = $str;
    }
}
