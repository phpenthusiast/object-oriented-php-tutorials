<?php
$author1 = new Author();
$author1 -> setName("Joe");

$title = "To PHP and Beyond";
$article1 = new Article($title,$author1);

echo $article1 -> getTitle() . ' by ' . 
    $article1 -> getAuthor() -> getName();
