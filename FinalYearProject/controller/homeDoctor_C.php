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

$todayDate = date("Y-m-d");
$docID = $_SESSION["doctorid"];
$docData = getIndividualDoctor($docID);
if ($docData)
{
    $docName = $docData["fullname"];
}
$schedule = getAppointmentsByDoctorAndDate($docName);

if (isset($_POST["logout"]))
{
    $_SESSION = array();
    session_destroy();

    header("Location: ../controller/loginDoctor_C.php");
    exit();
}

require_once "../view/homeDoctor.php";
?>