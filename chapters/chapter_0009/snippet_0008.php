<?php
abstract class User 
{
    protected $scores           = 0;
    protected $numberOfArticles = 0;

    public function setNumberOfArticles($int)
    {
        // Cast to integer type
        $numberOfArticles = (int)$int;
        $this -> numberOfArticles = $numberOfArticles;
    }

    public function getNumberOfArticles()
    {
        return $this -> numberOfArticles;
    }
    
    // The abstract method.
    abstract public function calcScores();
}
