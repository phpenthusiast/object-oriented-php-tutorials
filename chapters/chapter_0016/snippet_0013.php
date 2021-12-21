<?php
$dataForUsers = array(
    array("Ben",4),
    array("Eva",28),
    array("li",29),
    array("Catie","not yet born"),
    array("Sue",1.5)
);

foreach($dataForUsers as $data => $value) {
    try {
        $user = new User();

        $user -> setName($value[0]);
        $user -> setAge($value[1]);

        echo $user -> getName() . " is " . $user -> getAge() . " years old. <br />";
    } catch (Exception $e) {
        echo "Error: " . $e -> getMessage() . " in the file: " . $e -> getFile()
                . " on line: " . $e -> getLine() . "<hr />";
    }
}	
