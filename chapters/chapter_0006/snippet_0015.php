<?php
// We can declare the $username property as protected to allow the 
//   access for properties and methods that belongs to the child classes
class User 
{
    // Declare the $username as protected
    protected $username;

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
echo $admin1 -> sayHello();
