<?php
require_once "../model/admin.php";
require_once "../model/report.php";
require_once "../model/dataAccess.php";

session_start();
if (!isset($_SESSION["adminid"]))
{
    header("Location: ../controller/loginAdmin_C.php");
    exit();
}

$reports = getAllReports();

if (isset($_POST["logout"]))
{
    $_SESSION = array();
    session_destroy();

    header("Location: ../controller/loginAdmin_C.php");
    exit();
}

require_once "../view/reportsView.php";
?>