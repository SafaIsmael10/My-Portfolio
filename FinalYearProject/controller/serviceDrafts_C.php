<?php
require_once "../model/doctor.php";
require_once "../model/appointment.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["doctorid"]))
{
    header("Location: ../controller/loginDoctor_C.php");
    exit();
}

if (isset($_GET["download"]))
{
    $downloadType = $_GET["download"];

    switch ($downloadType)
    {
        case "referralletter":
        $content =
        "Dear Sir/Madam,

This is a sample referral letter. After consulting with [Patient], they require your assistance 
with the following issue: [Issue].
Please see attachment for a copy of their medical history.
[Attachment: Medical History]
        
Sincerely,
Dr. [Your Name]";
        $filename = "referralLetterTemplate.txt";
        break;

        case "prescription":
            $content =
            "Dear Sir/Madam,

This is a sample prescription. The patient [Patient] is prescribed [Amount] of [Medicine].
Collect before the following date: [Date].
        
Signed,
Dr. [Your Name]";
            $filename = "prescriptionTemplate.txt";
            break;

            case "bloodtestrequest":
                $content =
                "Dear Sir/Madam,

This is a sample blood test request. The patient [Patient] requires a blood test kit to be 
transferred for the test.
        
Signed,
Dr. [Your Name]";
                $filename = "bloodTestRequestTemplate.txt";
                break;
    }

    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$filename\"");

    echo $content;
    exit();
}

require_once "../view/serviceDrafts.php";
?>