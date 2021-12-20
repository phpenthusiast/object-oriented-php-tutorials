<?php
class Utilis 
{
    // Hold the number of cars
    static public $numberOfCars = 0;

    // Add 1 to the number of cars each time the method is called
    static public function add1ToCars()
    {
        self::$numberOfCars++;
    }
}


echo Utilis::$numberOfCars;

Utilis::add1ToCars();
echo Utilis::$numberOfCars;

Utilis::add1ToCars();
echo Utilis::$numberOfCars;

Utilis::add1ToCars();
echo Utilis::$numberOfCars;
