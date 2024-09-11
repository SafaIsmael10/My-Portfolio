<?php
require_once "../model/patient.php";
require_once "../model/dataAccess.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = getPatientsByCredentials($username);
    if ($user && password_verify($password, $user["password"])) 
    {
        $userID = $user["patientid"];
        $_SESSION["patientid"] = $userID;

        header("Location: ../controller/homePatient_C.php");
        exit();
    } 
    else 
    {
        echo '<script>alert("Incorrect credentials entered. Please try again.");</script>';
    }
}

require_once "../view/loginPatient.php";
?>