<?php
class View 
{
    private $controller;

    // Set the controller so we can use it
    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }

    // Output the data after processing it by the controller
    public function output()
    {
        return $this->controller->expensiveOrNot();
    }
}
