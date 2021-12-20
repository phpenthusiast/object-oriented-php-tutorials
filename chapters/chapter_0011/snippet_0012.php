<?php
function addMrOrMrsToUsername(User $user)
{
    $userName   = $user -> getUsername();
    $userGender = $user -> getGender();

    if($userGender === 'female')
    {
        return "Mrs. " . $userName;
    }
    else if($userGender === 'male')
    {
        return "Mr. " . $userName;
    }

    return $userName;
}
