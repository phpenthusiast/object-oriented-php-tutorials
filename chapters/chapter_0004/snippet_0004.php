<?php
class Car 
{
    // The private access modifier denies access to the 
    //   property from outside the class’s scope
    private $model;
    
    // The public access modifier allows the 
    //  access to the method from outside the class
    public function setModel($model)
    {
        // Validate that only certain car models are 
        //  assigned to the $carModel property
        $allowedModels = ["Mercedes", "BMW"];
        
        if(in_array($model,$allowedModels))
        {
            $this -> model = $model;
        }
        else
        {
            $this -> model = "not in our list of models";
        }
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
