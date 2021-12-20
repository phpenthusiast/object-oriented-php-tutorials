<?php
class Bmw 
{
    protected $model;
    protected $rib;
    protected $height;

    // The properties are introduced to the class through the constructor
    public function __construct($model, $rib, $height)
    {
        $this -> model = $model;
        $this -> rib = $rib;
        $this -> height = $height;
    }

    // Calculate the tank volume for rectangular tanks
    public function calcTankVolume()
    {
        return $this -> rib * $this -> rib * $this -> height;
    }
}
