<?php
class Commentator implements User 
{
    use Writing;

    public function writeContent()
    {
        return  "Commentator, please start typing your comment...";
    }
}
