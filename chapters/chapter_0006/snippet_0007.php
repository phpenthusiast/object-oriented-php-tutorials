<?php
// The parent class has hello method that returns "beep"
class Car 
{
    final public function hello()
    {
        return "beep";
    }
}

// The child class has hello method that tries 
//   to override the hello method in the parent
class SportsCar extends Car 
{
    public function hello()
    {
        return "Hallo";
    }
}


// Create a new object
$sportsCar1 = new SportsCar();

// Get the result of the hello method
echo $sportsCar1 -> hello();
