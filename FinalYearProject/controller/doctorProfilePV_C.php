<?php
require_once "../model/patient.php";
require_once "../model/doctor.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["patientid"]))
{
    header("Location: ../controller/loginPatient_C.php");
    exit();
}

$docID = $_GET["doctorid"];
$doctorData = getIndividualDoctor($docID);

require_once "../view/doctorProfilePV.php";
?>