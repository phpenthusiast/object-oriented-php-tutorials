<?php
interface Authors 
{
    public function setName($name);
    public function getName();
}

class Author implements Authors 
{
    protected $name;

    public function setName($name)
    {
        $this -> name = $name;
    }

    public function getName()
    {
        return $this -> name;
    }
}
