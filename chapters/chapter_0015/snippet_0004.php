<?php
$humanDriver = new HumanDriver();
$car = new Car($humanDriver);
echo $car -> getDriver() -> sayYourName("Bob");
