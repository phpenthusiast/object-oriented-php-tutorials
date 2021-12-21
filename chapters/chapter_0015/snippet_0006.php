<?php
class Car 
{
    protected $driver;

    // The constructor sets the value of the $driver
    public function __construct($driver)
    {
        $this -> driver = $driver;
    }
    
    // A getter method that returns the driver object
    //   from within the car object
    public function getDriver()
    {
        return $this -> driver;
    }
}
