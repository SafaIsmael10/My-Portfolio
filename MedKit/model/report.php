<?php
class Report
{
    private $reportid;
    private $report;

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