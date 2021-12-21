<?php
// The Driver interface
interface Driver 
{
    public function sayYourName($name);
}

// The HumanDriver implements the interface
class HumanDriver implements Driver 
{
    public function sayYourName($name)
    {
        return $name;
    }
}

// The RobotDriver implements the interface
class RobotDriver implements Driver 
{
    public function sayYourName($name)
    {
        return $name;
    }
}
