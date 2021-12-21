<?php
class Author implements User 
{
    use Writing;

    public function writeContent()
    {
        return  "Author, please start typing an article...";
    }
}
