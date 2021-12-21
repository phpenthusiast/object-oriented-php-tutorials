<?php
// Create the pdo object.
$db      = new Db;

// Get the connection.
$dbCon   = $db->get();

// When creating the new User class
//  pass the connection.
$userObj = new User($dbCon);

// Test insertion.
var_dump($userObj->insert('James Tiberius Kirk','0544308209','Riverside, Iowa'));

// Test selection.
var_dump($userObj->getUserById(1));
var_dump($userObj->getAll());

// Test update.
$array=['name'=>'Captain Kirk','city'=>'Tarsus IV','date_added'=>'2233-03-22'];
var_dump($userObj->updateUser(1,$array));
var_dump($userObj->getUserById(1));

// Test deletion.
var_dump($userObj->delete(1));
