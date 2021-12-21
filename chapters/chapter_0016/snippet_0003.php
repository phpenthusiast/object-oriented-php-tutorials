<?php
foreach($dataFromCars as $data => $value) {
    $fuelEconomy = new FuelEconomy();
    echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
}
