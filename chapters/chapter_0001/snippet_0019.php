<?php
class User 
{
    public $firstName;
    public $lastName;

    public function hello()
    {
        return "hello";
    }
}


$user1 = new User();
$user1->firstName = 'John';
$user1->lastName  = 'Doe';

$hello = $user1->hello();

echo $hello . ",  " . $user1->firstName . " " . $user1->lastName;
