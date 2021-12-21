<?php
$driver = new HumanDriver();
$car    = new Car();

// Inject the driver to the car object
$car -> setDriver($driver);

echo $car -> getDriver() -> sayYourName("Bob");
