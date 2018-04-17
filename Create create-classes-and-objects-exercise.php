<?php
// Exercise solutions for tutorial number 1
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
 
 
$user2 = new User();
$user2 ->firstName = 'Jane';
$user2 ->lastName  = 'Doe';
 
 
echo $hello . ",  " . $user1->firstName . " " . $user1->lastName;
 
echo $hello . ",  " . $user2->firstName . " " . $user2->lastName;
