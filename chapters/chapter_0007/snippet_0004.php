<?php
class Honda extends Car 
{
    // Since we inherited abstract method, 
    //   we need to define it in the child class,
    //   by adding code to the method's body.
    public function calcNumMilesOnFullTank()
    {
        $miles = $this -> tankVolume*30;
        return $miles;
    }
}
