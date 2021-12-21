<?php
foreach($dataFromCars as $data => $value) {
    try {
        $fuelEconomy = new FuelEconomy();
        echo $fuelEconomy -> calculate($value[0],$value[1]) . "<br />";
    }
    catch (Exception $e) {
        // Echo the error message to the user
        echo "Message: " . $e -> getMessage() . "<br />";
        echo "<hr />";

        // Write the error into a log file
        error_log($e -> getMessage());
        error_log($e -> getFile());
        error_log($e -> getLine());
    }
}
