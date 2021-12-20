<?php
class Car 
{
    // Public methods and properties
    public $model;
    
    public function getModel()
    {
        return "The car model is " . $this -> model;
    }
}

$mercedes = new Car();

// Here we access a property from outside the class
$mercedes -> model = "Mercedes";

// Here again we access another method from outside the class
echo $mercedes -> getModel();
