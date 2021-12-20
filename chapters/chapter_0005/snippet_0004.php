<?php
class Car 
{
    private $model;
    
    // The constructor
    public function __construct ($model)
    {
        $this -> model = $model;
    }
    
    public function getCarModel()
    {
        return ' The car model is: ' . $this -> model;
    }
}

// We pass the value of the variable 
//   once we create the object
$car1 = new Car("Mercedes");

echo $car1 -> getCarModel();
