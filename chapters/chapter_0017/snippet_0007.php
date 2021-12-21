<?php
$lastInsertId = $dbh->lastInsertId();

if($lastInsertId>0){
    echo "OK"; 
}else{
    echo "not OK";
}
