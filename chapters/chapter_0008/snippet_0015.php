<?php
$userName  = $user1 -> getUsername();
$userPrivileges = array_merge($user1 -> getAuthorPrivileges(),
    $user1 -> getEditorPrivileges());

echo $userName . " has the following privileges: ";
foreach($userPrivileges as $privilege) {
    echo " {$privilege},";
}
echo ".";
