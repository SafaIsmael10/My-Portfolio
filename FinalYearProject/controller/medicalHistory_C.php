<?php
require_once "../model/patient.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["patientid"]))
{
    header("Location: ../controller/loginPatient_C.php");
    exit();
}

$userID = $_SESSION["patientid"];
$medicalHistory = getIndividualPatient($userID);

require_once "../view/medicalHistory.php";
?>