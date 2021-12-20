<?php
class User 
{
    private $username;

    public function setUsername($name)
    {
        $this -> username = $name;
    }
}


class Admin extends User 
{
    public function expressYourRole()
    {
        return strtolower(__CLASS__);
    }

    public function sayHello()
    {
        return "Hello admin, " . $this -> username;
    }
}


$admin1 = new Admin();
$admin1 -> setUsername("Balthazar");
$admin1 -> sayHello();
