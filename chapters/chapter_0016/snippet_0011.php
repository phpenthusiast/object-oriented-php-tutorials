<?php
class User 
{
    private $name;
    private $age;

    public function setName($name)
    {
        $name = trim($name);

        if(strlen($name) < 3)
        {
            throw new Exception("The name should be at least 3 characters long.");
        }

        $this -> name = $name;
    }

    public function setAge($age)
    {
        $this -> age = $age;
    }

    public function getName()
    {
        return $this -> name;
    }
    
    public function getAge()
    {
        return $this -> age;
    }
}
