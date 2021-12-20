<?php
class Bmw extends Car 
{
    protected $rib;

    public function __construct($model, $rib, $height)
    {
        $this -> model = $model;
        $this -> rib        = $rib;
        $this -> height = $height;
    }

    // Calculate a rectangular tank volume
    public function calcTankVolume()
    {
        return $this -> rib * $this -> rib * $this -> height;
    }
}


class Mercedes extends Car {

    protected $radius;

    public function __construct($model, $radius, $height)
    {
        $this ->model = $model;
        $this -> radius = $radius;
        $this -> height = $height;
    }

    // Calculates the volume of cylinder
    public function calcTankVolume()
    {
        return $this -> radius * $this -> radius * pi() * $this -> height;
    }
}
