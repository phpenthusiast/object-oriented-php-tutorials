<?php
interface Driver 
{
    public function sayYourName($name);
}

class HumanDriver implements Driver 
{
    public function sayYourName($name)
    {
        return $name;
    }
}
