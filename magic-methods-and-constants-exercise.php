<?php
class User {
  private $firstName; 
  private $lastName; 
 
  public function __construct($firstName,$lastName) 
  {
    $this -> firstName = $firstName;
    $this -> lastName = $lastName;
  }
 
  public function getFullName()
  {
    return $this -> firstName . ' ' . $this -> lastName;
  }
}
 
$user1 = new User("John", "Doe");
 
echo $user1 -> getFullName();
