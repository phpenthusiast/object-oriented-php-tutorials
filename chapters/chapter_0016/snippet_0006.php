<?php
foreach ($dataFromCars as $data => $value) {
    try {
        $fuelEconomy = new FuelEconomy();
        echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
    } catch (Exception $e) {
        echo "Message: " . $e -> getMessage() . "<br />";

        // Output the path to the file
        echo "File: " . $e -> getFile() . "<br />";
        
         // Output the line in the code
         echo "Line: " . $e -> getLine() . "<br />";
         echo "<hr />";
    }
}
