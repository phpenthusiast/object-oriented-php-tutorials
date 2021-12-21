<?php
$sql   = "DELETE FROM `users` WHERE `id`=:id";

$query = $dbh -> prepare($sql);

$query -> bindParam(':id', $id, PDO::PARAM_INT);

$id = 1;

$query -> execute();

if ($query -> rowCount() > 0) {
    $count = $query -> rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}
