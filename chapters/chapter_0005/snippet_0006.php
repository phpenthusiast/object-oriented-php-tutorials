<?php
class Car 
{
    private $model = '';

    // The constructor
    public function __construct($model = null)
    {
        if($model)
        {
            $this -> model = $model;
        }
    }
    
    public function getCarModel()
    {
        return ' The car model is: ' . $this -> model;
    }
}

// We create the new Car object 
//   with the value of the model
$car1 = new Car('Mercedes');

echo $car1 -> getCarModel();
