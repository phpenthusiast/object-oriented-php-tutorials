<?php
class Car 
{
    protected $driver;

    // The setDriver method sets
    //   the value for the driver property
    public function setDriver(Driver $driver)
    {
        $this -> driver = $driver;
    }
    
    public function getDriver()
    {
        return $this -> driver;
    }
}
