<?php

Class Int
{
    function int($string)
    {
        return (int) $string;
    }
}


function getNameBy(int $id) : string
{
    return (string) 'name';
}

$username = $_GET['username']
  ?? $_POST['username']
  ?? 'guest';