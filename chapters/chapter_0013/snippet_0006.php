<?php
trait Price 
{
    // The method needs the $price property.
    public function changePriceByDollars($change)
    {
        return $this -> price += $change;
    }
}


class Mercedes 
{
    use Price;

    // The $price is private
    private $price;
    
    public function __construct($price)
    {
        $this -> price = $price;
    }

    public function getPrice()
    {
        return $this -> price;
    }
}


$mercedes1 = new Mercedes(42000);
echo $mercedes1 -> getPrice();
$mercedes1 -> changePriceByDollars(-2100);
echo $mercedes1 -> getPrice();
