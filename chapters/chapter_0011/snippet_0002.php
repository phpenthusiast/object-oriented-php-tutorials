<?php
// Type hinting ensures that the function gets only Bmw objects as arguments
function calcTankPrice(Bmw $bmw, $pricePerGalon)
{
    return $bmw -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
}
