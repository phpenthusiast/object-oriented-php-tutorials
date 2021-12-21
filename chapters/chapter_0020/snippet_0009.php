<?php
// The data can come from the user
//    e.g. through a post request
$priceToCheck = $_POST['price'] = 29900;

// We need the model to store the data
$model2 = new Model();

// We need the controller in order to get the user data
//   and process it before passing it to the Model
$controller2 = new Controller($model2);
$controller2 -> setPrice($_POST['price']);

// We need the view in order to output the processed data
$view2 = new View($controller2);
echo $output = $view2 -> output();
