<?php
class Viewer extends User 
{
    public function stateYourRole()
    {
        return strtolower(__CLASS__);
    }
}
