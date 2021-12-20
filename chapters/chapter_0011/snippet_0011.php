<?php
class Commentator implements User 
{
    private $username = '';
    private $gender  = 'none of your business!';

    // Set and get the $username
    public function setUsername($name)
    {
        $this -> username = (is_string($name))? $name : 'N/A';
    }

    public function getUsername()
    {
        return $this -> username;
    }

    // Set and get the gender
    public function setGender($gender)
    {
        $gendersArray = array('female', 'male', 'other');

        if(in_array($gender, $gendersArray))
        {
            $this -> gender = $gender;
        }
    }

    public function getGender()
    {
        return $this -> gender;
    }
}
