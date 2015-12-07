<?php


Class Int
{
    function int($string)
    {
        return (int)$string;
    }
}


function getNameById(int $id) : string
{
    return (string)'name';
}


$username = $_GET['username'] ?? $_POST['username'] ?? 'guest';


class MyClass implements \Zend\Db\Adapter\AdapterAwareInterface
{

    public function setDbAdapter(Adapter $adapter)
    {
        // TODO: Implement setDbAdapter() method.
    }
}