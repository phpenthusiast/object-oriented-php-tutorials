<?php
$user1 = new Commentator();
$user1 -> setUsername("Jane");
$user1 -> setGender("female");
echo addMrOrMrsToUsername($user1);

$user2 = new Commentator();
$user2 -> setUsername("Bob");
$user2 -> setGender("male");
echo addMrOrMrsToUsername($user2);
