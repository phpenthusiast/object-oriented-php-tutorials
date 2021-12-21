<?php
// The Car class gets the driver object injected
//   to its constructor
class Car 
{
    protected $driver;
    
    // The constructor sets the value of the $driver
    public function __construct(Driver $driver)
    {
        $this -> driver = $driver;
    }

    public function getDriver()
    {
        return $this -> driver;
    }
}
