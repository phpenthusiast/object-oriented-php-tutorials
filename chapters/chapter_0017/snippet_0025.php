<?php
$sql = "UPDATE users
SET `city`= :city, `phone` = :tel
WHERE `id` = :id";

$query = $dbh->prepare($sql);

$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query -> bindParam(':tel' , $tel , PDO::PARAM_INT);
$query -> bindParam(':id'  , $id  , PDO::PARAM_INT);

$tel = '02012345678';
$city = 'London';
$id = 1;

$query -> execute();

if ($query -> rowCount() > 0) {
    $count = $query -> rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}
