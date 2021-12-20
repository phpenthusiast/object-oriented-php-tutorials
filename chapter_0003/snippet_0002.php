<?php
class Car 
{
    public $tank;

    // Add gallons of fuel to the tank when we fill it
    public function fill($float)
    {
        $this-> tank += $float;
    }

    // Subtract gallons of fuel from the tank as we ride the car
    public function ride($float)
    {
        $miles = $float;
        $gallons = $miles/50;
        $this-> tank -= $gallons;
    }
}
