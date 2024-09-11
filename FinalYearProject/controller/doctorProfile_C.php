<?php
require_once "../model/doctor.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["doctorid"]))
{
    header("Location: ../controller/loginDoctor_C.php");
    exit();
}

$docID = $_SESSION["doctorid"];
$doctorData = getIndividualDoctor($docID);

require_once "../view/doctorProfile.php";
?>