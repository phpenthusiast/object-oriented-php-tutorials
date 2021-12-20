<?php
abstract class User 
{
    protected $username = '';

    abstract public function stateYourRole();

    public function setUsername($name)
    {
        $this -> username = $name;
    }

    public function getUsername()
    {
        return $this -> username;
    }
}
