<?php
class Patient
{
    private $patientid;
    private $username;
    private $password;
    private $email;
    private $phone;
    private $fullname;
    private $dob;
    private $gender;
    private $address;
    private $bloodtype;
    private $allergies;
    private $profileimage;
    private $medicalhistory;

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