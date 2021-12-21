<?php
class FuelEconomy 
{
    // Calculate the fuel efficiency
    public function calculate($distance, $gas)
    {
        return $distance/$gas;
    }
}
