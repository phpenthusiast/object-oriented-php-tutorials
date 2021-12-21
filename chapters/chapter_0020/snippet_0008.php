<?php
class Controller 
{
    private $model;
    private $limit = 30000;
    
    // Set the model so we can use its data
    public function __construct(Model $model)
    {
        $this -> model = $model;
    }
    
    // Set the data in the module
    public function setPrice($price)
    {
        $this->model->setPrice((int)$price);
    }

    // Some logic to check if the price is expensive
    public function expensiveOrNot()
    {
        if($this->model->getPrice() > $this->limit) return "expensive";

        return "not expensive";
    }
}
