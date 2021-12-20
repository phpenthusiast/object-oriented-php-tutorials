<?php
class Utilis 
{
    // The method uses PHP's header function 
    //   to redirect the user
    static public function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
