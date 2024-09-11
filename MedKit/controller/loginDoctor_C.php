<?php
require_once "../model/doctor.php";
require_once "../model/dataAccess.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $doctor = getDoctorsByCredentials($username, $password);
    if ($doctor) 
    {
        $docID = $doctor["doctorid"];
        $_SESSION["doctorid"] = $docID;
        header("Location: ../controller/homeDoctor_C.php");
        exit();
    } 
    else 
    {
        echo '<script>alert("Incorrect credentials entered. Please try again.");</script>';
    }
}

require_once "../view/loginDoctor.php";
?>