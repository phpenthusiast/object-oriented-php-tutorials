<?php
class Model
{
    // Store the data
    private $carPrice;

    // Set the data
    public function setPrice($price)
    {
        $this -> carPrice = $price;
    }

    // Get the data
    public function getPrice()
    {
        return $this -> carPrice;
    }
}
