<?php
class Car 
{
    protected $driver;

    // The constructor can only get Driver objects as arguments.
    public function __construct(Driver $driver)
    {
        $this -> driver = $driver;
    }
}


class Driver {}


$driver1 = new Driver();
$car1    = new Car($driver1);
