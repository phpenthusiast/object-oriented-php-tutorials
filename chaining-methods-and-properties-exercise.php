<?php
class User {
  // The class properties.
  public $firstName;
  public $lastName;
 
  // A method that says hello to the user $firstName.
  // The user $firstName property can be approached with the $this keyword.
  public function hello()
  {
    return "hello, " .  $this -> firstName;

  }
 
  // The register method.
  public function register()
  {
    echo $this -> firstName . " " . $this -> lastName . " registered.";
    return $this;
  }
 
  // The mail method.
  public function mail()
  {
    echo " emailed.";
  }
}
 
$user1 = new User();
$user1 -> firstName = 'Jane';
$user1 -> lastName = 'Roe';
 
// Chain the methods mail() to register().
$user1 -> register() -> mail();
