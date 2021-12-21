<?php
// The data can come from the database
$priceToCheck = 31000;

// The data is retrieved by the model
$model1 = new Model();
$model1 -> setPrice($priceToCheck);

// We need the controller in order to process the data
$controller1 = new Controller($model1);

// We need the view in order to output the processed data
$view1 = new View($controller1);
echo $output = $view1 -> output();
