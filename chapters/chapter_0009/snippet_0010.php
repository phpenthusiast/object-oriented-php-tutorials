<?php
class Editor extends User 
{
    public function calcScores()
    {
        return $this -> scores =
            $this -> numberOfArticles * 6 + 15;
    }
}
