<?php
// 1. Require the file
require "src/Car/CarIntro.php";

// 2. Import the namespace
use Acme\Car\CarIntro;

// 3. Call the class from the context of the namespace,
//      this time by using only the class name
$carIntro = new CarIntro();
echo $carIntro -> sayHello();
