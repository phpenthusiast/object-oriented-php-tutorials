<?php
class FuelEconomy 
{
    // Calculate the fuel efficiency
    public function calculate($distance, $gas)
    {
        if($gas <= 0 ) {
            // Throw custom error message, instead of an error
            throw new Exception("The gas consumption cannot be less than 
               or equal to zero. You better drink coffee or take a break.");
        }

        return $distance/$gas;
    }
}
