<?php
// 1. Require both classes
require "src/Car/CarIntro.php";
require "src/Car/CarPrice.php";

// 2. Import the namespaces and give them a friendly name
use Acme\Car\CarIntro as Intro;
use Acme\Car\CarPrice as Price;

// 3. Use the methods in the context of their namespace
$carIntro = new Intro();
echo $carIntro -> sayHello();

$carPrice = new Price();
echo $carPrice -> getQuote();
