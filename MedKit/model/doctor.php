<?php
class Doctor
{
    private $doctorid;
    private $username;
    private $password;
    private $email;
    private $phone;
    private $fullname;
    private $dob;
    private $gender;
    private $address;
    private $role;
    private $languages;
    private $biography;

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