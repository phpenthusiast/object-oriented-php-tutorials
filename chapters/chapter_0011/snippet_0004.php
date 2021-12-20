<?php
class Mercedes 
{
    protected $model;
    protected $radius;
    protected $height;

    public function __construct($model, $radius, $height)
    {
        $this -> model = $model;
        $this -> radius = $radius;
        $this -> height = $height;
    }

    // Calculate the volume of cylinders
    public function calcTankVolume()
    {
        return $this -> radius * $this -> radius * pi() * $this -> height;
    }
}
