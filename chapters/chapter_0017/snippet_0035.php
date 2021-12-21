<?php
class User 
{
    private $tableName = 'users';
    private $dbCon;

    // First, save the connection in a private property.
    function __construct($dbCon)
    {
        $this->dbCon = $dbCon;
    }
}
