<?php
$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query -> bindParam(':tel' , $tel , PDO::PARAM_INT);
$query -> bindParam(':id' , $id , PDO::PARAM_INT);
