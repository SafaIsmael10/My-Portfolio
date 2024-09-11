<?php
require_once "../model/admin.php";
require_once "../model/dataAccess.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $admin = getAdminByCredentials($username, $password);
    if ($admin) 
    {
        $adminID = $admin["adminid"];
        $_SESSION["adminid"] = $adminID;
        header("Location: ../controller/reportsView_C.php");
        exit();
    } 
    else 
    {
        echo '<script>alert("Incorrect credentials entered. Please try again.");</script>';
    }
}

require_once "../view/loginAdmin.php";
?>