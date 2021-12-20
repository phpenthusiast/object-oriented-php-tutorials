<?php
class Car 
{
    // The properties
    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;

    // The method that says hello
    public function hello()
    {
        return "Beep I am a <i>" . $this -> comp . 
            "</i>, and I am <i>" . $this -> color;
    }
}
