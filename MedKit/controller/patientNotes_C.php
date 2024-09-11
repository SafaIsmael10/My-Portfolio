<?php
require_once "../model/doctor.php";
require_once "../model/appointment.php";
require_once "../model/patient.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["doctorid"]))
{
    header("Location: ../controller/loginDoctor_C.php");
    exit();
}

$appID = $_GET["appointmentid"];
$appointmentData = getIndividualAppointment($appID);

require_once "../view/patientNotes.php";
?>