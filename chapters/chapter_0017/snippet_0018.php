<?php
$sql = "SELECT * FROM users WHERE city = :city";

$query = $dbh -> prepare($sql);

$query -> bindParam(':city', $city, PDO::PARAM_STR);

$city = "New York";

$query -> execute();

$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0){
    foreach($results as $result){
        echo $result -> name . ", ";
        echo $result -> city . ", ";
        echo $result -> date_added;
    }
}
