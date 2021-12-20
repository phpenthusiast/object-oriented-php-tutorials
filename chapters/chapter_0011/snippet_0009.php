<?php
$bmw1 = new Bmw('62182791', 14, 21);
echo calcTankPrice($bmw1, 3);

$mercedes1 = new Mercedes('12189796', 7, 28);
echo calcTankPrice($mercedes1, 3);
