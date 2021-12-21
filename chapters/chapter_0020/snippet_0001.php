<?php
// Get the price and return whether it is expensive or not
function expensiveOrNot($price)
{
    if($price > 30000) return "expensive";

    return "not expensive";
}

// The data from the data source is stored in an array
$cars = array (
    "Bmw" => array("model" => "2-Series", "price" => "32000"),
    "Audi" => array("model"=> "A3", "price"=>"29900")
);

// Perform some logic on the data to find out whether the cars are expensive
//  and store the returned values into this array
$carsReviewed = array(
    "Bmw" => array(
        "model" => "2-Series",
        "price" => "32000", 
        "expensiveOrNot"=>expensiveOrNot(32000)
        ),
    "Audi" => array(
        "model"=> "A3",
        "price"=>"29900",
        "expensiveOrNot"=>expensiveOrNot(29900)
    )
);
