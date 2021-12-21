<?php
$bmw1 = new Bmw();

// Add 3000$
echo $bmw1 -> changePriceByDollars(45000, +3000);


$mercedes1 = new Mercedes();

// Subtract 2100$
echo $mercedes1 -> changePriceByDollars(42000, -2100);
