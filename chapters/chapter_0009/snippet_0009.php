<?php
class Author extends User {
    public function calcScores()
    {
        return $this -> scores =
            $this -> numberOfArticles * 10 + 20;
    }
}
