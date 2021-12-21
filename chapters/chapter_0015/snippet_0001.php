<?php
class HumanDriver 
{
    // Method to return the driver name
    public function sayYourName($name)
    {
        return $name;
    }
}


// Car is dependent on HumanDriver
class Car 
{
    protected $driver;

    // We create the driver object in the constructor,
    //   and use this object to populate the $driver property
    public function __construct()
    {
        $this->driver = new HumanDriver();
    }
    
    // A getter method that returns the driver object
    //   from within the car object
    public function getDriver()
    {
        return $this -> driver;
    }
}
