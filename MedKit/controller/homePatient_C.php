<?php
require_once "../model/patient.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["patientid"]))
{
    header("Location: ../controller/loginPatient_C.php");
    exit();
}

if (isset($_POST["logout"]))
{
    $_SESSION = array();
    session_destroy();

    header("Location: ../controller/loginPatient_C.php");
    exit();
}

require_once "../view/homePatient.php";
?>