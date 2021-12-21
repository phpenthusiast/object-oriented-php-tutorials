<?php
// 1. Require the namespaced file
require "src/Car/CarIntro.php";

// 2. Import the namespace
use Acme\Car\CarIntro;

// 3. Use the class from the context of the namespace
$carIntro = new Acme\Car\CarIntro();
echo $carIntro -> sayHello();
