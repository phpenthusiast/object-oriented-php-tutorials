<?php
class User {
 
  // We use the private access modifier in order to prevent code from outside
  // the class from modifying the property’s value.
  private $firstName;
 
  // A public setter method allows us to set the $firsName property.
  public function setFirstName($str)
  {
    $this -> firstName = $str;
  }
 
  // A public getter method allows us to return the $firsName property.
  public function getFirstName()
  { 
    return $this -> firstName;
  }
}
 
$user1 = new User();
$user1 -> setFirstName('Joe');
echo $user1 -> getFirstName();
