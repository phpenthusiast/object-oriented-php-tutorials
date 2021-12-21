<?php
$sql = "INSERT INTO `users`
        (`name`, `phone`, `city`, `date_added`) 
        VALUES 
        (:name,:phone,:city,:date)";

$query = $dbh -> prepare($sql);

$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_INT);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);


// Provide the data to the loop within an array
$date = date('Y-m-d');
$userData = array(
    array("Joe","1231234567","New York",$date),
    array("Joseph","037234561","Tel Aviv",$date)
);

// Perform the query within a loop
foreach($userData as $key => $value){
    $name = $value[0];
    $phone = $value[1];
    $city = $value[2];
    $date = $value[3];
    
    $query -> execute();

    $lastInsertId = $dbh->lastInsertId();
    
    if($lastInsertId>0){echo "OK";} else {echo "not OK";}
}
