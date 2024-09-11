<?php
require_once "../model/patient.php";
require_once "../model/doctor.php";
require_once "../model/appointment.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["patientid"]))
{
    header("Location: ../controller/loginPatient_C.php");
    exit();
}

$doctors = getAllDoctors();

$patientid = isset($_SESSION["patientid"]) ? $_SESSION["patientid"] : null;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $type = isset($_POST["type"]) ? $_POST["type"] : null;
    $location = isset($_POST["location"]) ? $_POST["location"] : null;
    $date = isset($_POST["date"]) ? $_POST["date"] : null;
    $time = isset($_POST["time"]) ? $_POST["time"] : null;
    $doctorgender = isset($_POST["doctorgender"]) ? $_POST["doctorgender"] : null;
    $doctor = isset($_POST["doctor"]) ? $_POST["doctor"] : null;
    $patientnotes = isset($_POST["patientnotes"]) ? $_POST["patientnotes"] : null;

    if ($type === null) 
    {
        header("Location: ../controller/bookAppointments_C.php");
        exit();
    }
    
    bookAppointment($type, $location, $date, $time, $doctorgender, $doctor, $patientnotes, $patientid);
    header("Location: ../controller/bookingSuccess_C.php");
    exit();
}

require_once "../view/bookAppointments.php";
?>