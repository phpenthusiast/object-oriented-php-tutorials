<?php
class Car 
{
    // The private access modifier denies access to the method 
    //   from outside the class’s scope
    private $model;

    // The public access modifier allows the access to the method 
    //   from outside the class
    public function setModel($model)
    {
        $this -> model = $model;
    }

    public function getModel()
    {
        return "The car model is  " . $this -> model;
    }
}

$mercedes = new Car();

// Set the car’s model
$mercedes -> setModel("Mercedes");

// Get the car’s model
echo $mercedes -> getModel();
