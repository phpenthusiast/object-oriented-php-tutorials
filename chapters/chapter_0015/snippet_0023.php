<?php
class Article 
{
    protected $title;
    protected $author;
    
    public function __construct($title, Author $author)
    {
        $this -> title = $title;
        
        // The object is injected to the class.
        $this -> author = $author;
    }

    public function getTitle()
    {
        return $this -> title;
    }

    public function getAuthor()
    {
        return $this -> author;
    }
}
