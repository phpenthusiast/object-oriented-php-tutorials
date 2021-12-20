<?php
class Rectangle implements Shape 
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }

    // calcArea calculates the area of rectangles
    public function calcArea()
    {
        return $this -> width * $this -> height;
    }
}
