<?php
class Appointment
{
    private $appointmentid;
    private $type;
    private $location;
    private $date;
    private $time;
    private $doctorgender;
    private $doctor;
    private $patientnotes;
    private $patientid;
    private $doctorid;

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