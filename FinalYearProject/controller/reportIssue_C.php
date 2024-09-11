<?php
require_once "../model/patient.php";
require_once "../model/report.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["patientid"]))
{
    header("Location: ../controller/loginPatient_C.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $report = isset($_POST["report"]) ? $_POST["report"] : null;

    if ($report === null) 
    {
        header("Location: ../controller/reportIssue_C.php");
        exit();
    }
    
    sendReport($report);
    header("Location: ../controller/reportSuccess_C.php");
    exit();
}

require_once "../view/reportIssue.php";
?>