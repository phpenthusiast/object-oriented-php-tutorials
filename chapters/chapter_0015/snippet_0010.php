<?php
$humanDriver = new HumanDriver();
$car = new Car($humanDriver);
echo $car -> getDriver() -> sayYourName("Bob");

$robotDriver = new RobotDriver();
$car = new Car($robotDriver);
echo $car -> getDriver() -> sayYourName("R2-D2");
