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
$patientData = getIndividualPatient($userID);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["upload"]))
{
    $targetDirectory = "../uploads/profileImages/";
    $targetFile = $targetDirectory . basename($_FILES["profileimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
    {
        echo '<script>alert("Only JPG, JPEG, PNG files are allowed.");</script>';
        $uploadOk = 0;
    }
    if ($_FILES["profileimage"]["size"] > 500000) 
    {
        echo '<script>alert("Your file is too large.");</script>';
        $uploadOk = 0;
    }
    if ($uploadOk == 0) 
    {
        echo '<script>alert("Your file was not uploaded.");</script>';
        
    } 
    else 
    {
        if (move_uploaded_file($_FILES["profileimage"]["tmp_name"], $targetFile)) 
        {
            updateProfileImage($userID, $targetFile);
            echo '<script>alert("The file has been successfully uploaded");</script>';
        } 
        else 
        {
            echo '<script>alert("There was an error uploading your file.");</script>';
        }
    }
}

require_once "../view/patientProfile.php";
?>