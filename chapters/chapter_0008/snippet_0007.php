<?php
class User 
{
    protected $username;

    public function setUsername($name)
    {
        $this -> username = $name;
    }

    public function getUsername()
    {
        return $this -> username;
    }
}
