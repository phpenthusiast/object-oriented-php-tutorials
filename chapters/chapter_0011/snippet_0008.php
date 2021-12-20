<?php
// Type hinting ensures that the function gets only objects
//   that belong to the Car interface
function calcTankPrice(Car $car, $pricePerGalon)
{
    echo $car -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}
