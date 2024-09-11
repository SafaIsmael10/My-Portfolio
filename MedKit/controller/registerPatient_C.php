<?php
require_once "../model/patient.php";
require_once "../model/dataAccess.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : null;
    $dob = isset($_POST["dob"]) ? $_POST["dob"] : null;
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
    $address = isset($_POST["address"]) ? $_POST["address"] : null;
    $bloodtype = isset($_POST["bloodtype"]) ? $_POST["bloodtype"] : null;
    $allergies = isset($_POST["allergies"]) ? $_POST["allergies"] : null;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $targetDirectory = "../uploads/medicalHistory/";
    $targetFile = $targetDirectory . basename($_FILES["medicalhistory"]["name"]);
    $uploadOk = 1;
    $medicalHistoryFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if ($medicalHistoryFileType != "pdf") 
    {
        echo '<script>alert("Only PDF files are allowed.");</script>';
        $uploadOk = 0;
    }
    if ($_FILES["medicalhistory"]["size"] > 5000000) 
    {
        echo '<script>alert("Your file is too large.");</script>';
        $uploadOk = 0;
    }
    if ($uploadOk == 1) 
    {
        if (move_uploaded_file($_FILES["medicalhistory"]["tmp_name"], $targetFile)) 
        {
            $medicalhistory = $targetFile;
    
            registerPatient($username, $hashedPassword, $email, $phone, $fullname, $dob, $gender, $address, $bloodtype, $allergies, $medicalhistory);
            header("Location: ../controller/registerSuccess_C.php");
            exit();
        }
    }

    if ($username === null || $password === null || $email === null) 
            {
                header("Location: ../controller/registerPatient_C.php");
                exit();
            }
}

require_once "../view/registerPatient.php";
?>