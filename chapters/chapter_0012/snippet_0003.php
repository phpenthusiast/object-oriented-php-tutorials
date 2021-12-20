<?php
class Utilis 
{
    static public $numCars = 0;

    static public function addToNumCars($int)
    {
        $int = (int)$int;
        self::$numCars += $int;
    }
}
