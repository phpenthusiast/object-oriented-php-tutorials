<?php
// The function can only get array as an argument.
function calcNumMilesOnFullTank(array $models)
{
    foreach($models as $item){
        echo $carModel = $item[0];
        echo " : ";
        echo $numberOfMiles = $item[1] * $item[2];
        echo "<br />";
    }
}
