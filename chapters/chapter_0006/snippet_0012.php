<?php
class Admin extends User
{
    public function expressYourRole()
    {
        return strtolower(__CLASS__);
    }
}
