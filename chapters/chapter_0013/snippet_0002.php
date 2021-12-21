<?php
trait Price 
{
    public function changePriceByDollars($price, $change)
    {
        return $price + $change;
    }
}
