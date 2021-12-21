<?php
class User 
{
    private $name;
    private $age;

    public function setName($name)
    {
        // Trim the white spaces
        $name = trim($name);
        $this -> name = $name;
    }

    public function setAge($age)
    {
        // Cast into an integer type
        $age = (int)$age;
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
