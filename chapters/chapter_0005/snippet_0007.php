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
        // We use the __CLASS__ magic constant 
        //   in order to get the class name
        return " The <b>" . __CLASS__ . "</b> model is: " . $this -> model;
    }
}

