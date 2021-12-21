<?php require "controller.php"; ?>
<!doctype html>
<html>
<head>
</head>
<body>
<p>
BMW <?=$carsReviewed["Bmw"]["model"]?> is 
<?=$carsReviewed["Bmw"]["expensiveOrNot"]?>
while Audi<?=$carsReviewed["Audi"]["model"]?> is 
<?=$carsReviewed["Audi"]["expensiveOrNot"]?>.
</p>
</body>
</html>
