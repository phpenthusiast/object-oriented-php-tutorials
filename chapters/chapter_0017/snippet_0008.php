<?php
$sql = "INSERT INTO `users`
        (`name`, `phone`, `city`, `date_added`) 
        VALUES 
        (:name,:phone,:city,:date)";

$query = $dbh -> prepare($sql);

$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_INT);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':date',$date);

// Insert the first row
$name  = "Joe";
$phone = "1231234567";
$city  = "New York";
$date  = date('Y-m-d');

$query -> execute();

$lastInsertId = $dbh->lastInsertId();

if($lastInsertId>0) { echo "OK"; } else { echo "not OK"; }


// Insert the second row
$name  = "Joseph";
$phone = "037234561";
$city  = "Tel Aviv";
$date  = date('Y-m-d');

$query -> execute();

$lastInsertId = $dbh->lastInsertId();

if($lastInsertId>0){echo "OK";} else {echo "not OK";}
