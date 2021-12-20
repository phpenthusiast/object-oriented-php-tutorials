<?php
abstract class Car 
{
    protected $model;
    protected $height;

    abstract public function calcTankVolume();
}
