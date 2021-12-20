<?php
class AuthorEditor extends User implements Author,Editor  
{
    private $authorPrivilegesArray = array();

    private $editorPrivilegesArray = array();

    public function setAuthorPrivileges($array)
    {
        $this -> authorPrivilegesArray = $array;
    }

    public function getAuthorPrivileges()
    {
        return $this -> authorPrivilegesArray;
    }

    public function setEditorPrivileges($array)
    {
        $this -> editorPrivilegesArray = $array;
    }

    public function getEditorPrivileges()
    {
        return $this -> editorPrivilegesArray;
    }
}
