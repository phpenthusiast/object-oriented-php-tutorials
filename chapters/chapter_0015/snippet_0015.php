<?php
class Article 
{
    protected $title;
    protected $author;
    
    public function __construct($title, $author)
    {
        $this -> title = $title;
        
        // The object is injected to the class
        $this -> author = $author;
    }
}
