<?php
// 1. Require the file
require "src/Car/CarIntro.php";

// 2. Import the namespace and give it a friendly name
use Acme\Car\CarIntro as Intro;

// 3. Call the class from the namespace with the friendly name
$carIntro = new Intro();
echo $carIntro -> sayHello();
