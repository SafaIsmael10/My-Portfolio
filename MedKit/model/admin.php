<?php
class Admin
{
    private $adminid;
    private $username;
    private $password;

    function __get($name) 
    {
        return $this->$name;
    }
    
    function __set($name, $value) 
    {
        $this->$name = $value;
    }
}
?>