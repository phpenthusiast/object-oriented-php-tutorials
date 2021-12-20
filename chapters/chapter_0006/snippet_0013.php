<?php
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
