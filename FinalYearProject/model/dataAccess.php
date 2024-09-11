<?php
$host = "localhost";
$dbname = "medicalsoftware";
$username = "root";
$password = "";
$pdo = new PDO("mysql:host=$host; dbname=$dbname", "$username", "$password", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function getAllDoctors()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM doctors");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Doctor");
    return $results;
}

function getDoctorsByCredentials($username, $password) 
{
    global $pdo;
    $query = "SELECT * FROM doctors WHERE username = :username AND password = :password";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->execute();
    $doctor = $statement->fetch(PDO::FETCH_ASSOC);

    if ($doctor) 
    {
        return $doctor;
    } 
    else 
    {
        return false;
    }
}

function getIndividualDoctor($docID)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM doctors WHERE doctorid = ?");
    $statement->bindParam(1, $docID, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    return $results;
}
//-----------------------------------------------------------------------------------
function getAllPatients()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM patients");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Patient");
    return $results;
}

function getPatientsByCredentials($username) 
{
    global $pdo;
    $query = "SELECT * FROM patients WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) 
    {
        return $user;
    } 
    else 
    {
        return false;
    }
}

function registerPatient($username, $password, $email, $phone, $fullname, $dob, $gender, $address, $bloodtype, $allergies, $medicalhistory)
{
    global $pdo;
    $query = "INSERT INTO patients (username, password, email, phone, fullname, dob, gender, address, bloodtype, allergies, medicalhistory) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(1, $username, PDO::PARAM_STR);
    $statement->bindParam(2, $password, PDO::PARAM_STR);
    $statement->bindParam(3, $email, PDO::PARAM_STR);
    $statement->bindParam(4, $phone, PDO::PARAM_STR);
    $statement->bindParam(5, $fullname, PDO::PARAM_STR);
    $statement->bindParam(6, $dob, PDO::PARAM_STR);
    $statement->bindParam(7, $gender, PDO::PARAM_STR);
    $statement->bindParam(8, $address, PDO::PARAM_STR);
    $statement->bindParam(9, $bloodtype, PDO::PARAM_STR);
    $statement->bindParam(10, $allergies, PDO::PARAM_STR);
    $statement->bindParam(11, $medicalhistory, PDO::PARAM_STR);
    $statement->execute();
}

function getIndividualPatient($userID)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM patients WHERE patientid = ?");
    $statement->bindParam(1, $userID, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function updateProfileImage($userID, $targetFile)
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE patients SET profileimage = :targetFile WHERE patientid = :userID");
    $statement->bindParam(':targetFile', $targetFile, PDO::PARAM_STR);
    $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statement->execute();
}
//---------------------------------------------------------------------------------
function getAllAppointments()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM appointments");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Appointment");
    return $results;
}

function bookAppointment($type, $location, $date, $time, $doctorgender, $doctor, $patientnotes, $patientid)
{
    global $pdo;
    $query = "INSERT INTO appointments (type, location, date, time, doctorgender, doctor, patientnotes, patientid) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(1, $type, PDO::PARAM_STR);
    $statement->bindParam(2, $location, PDO::PARAM_STR);
    $statement->bindParam(3, $date, PDO::PARAM_STR);
    $statement->bindParam(4, $time, PDO::PARAM_STR);
    $statement->bindParam(5, $doctorgender, PDO::PARAM_STR);
    $statement->bindParam(6, $doctor, PDO::PARAM_STR);
    $statement->bindParam(7, $patientnotes, PDO::PARAM_STR);
    $statement->bindParam(8, $patientid, PDO::PARAM_INT);
    $statement->execute();
}

function cancelAppointment($appID)
{
    global $pdo;
    $statement = $pdo->prepare("DELETE FROM appointments WHERE appointmentid = ?");
    $statement->bindParam(1, $appID, PDO::PARAM_INT);
    $statement->execute();
}

function getAppointmentsByPatient($userID)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM appointments WHERE patientid = ?");
    $statement->bindParam(1, $userID, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Appointment");
    return $results;
}

function getAppointmentsByDoctorAndDate($docName)
{
    global $pdo;
    $todayDate = date("Y-m-d");
    $statement = $pdo->prepare("SELECT * FROM appointments WHERE doctor = ? AND DATE(date) = ?");
    $statement->bindParam(1, $docName, PDO::PARAM_STR);
    $statement->bindParam(2, $todayDate, PDO::PARAM_STR);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Appointment");
    return $results;
}

function getIndividualAppointment($appID)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM appointments WHERE appointmentid = ?");
    $statement->bindParam(1, $appID, PDO::PARAM_INT);
    $statement->execute();
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    return $results;
}
//----------------------------------------------------------------------------------
function getAllReports()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM reports");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Report");
    return $results;
}

function sendReport($report)
{
    global $pdo;
    $query = "INSERT INTO reports (report) VALUES (?)";
    $statement = $pdo->prepare($query);
    $statement->bindParam(1, $report, PDO::PARAM_STR);
    $statement->execute();
}
//----------------------------------------------------------------------------------
function getAllAdmins()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM admins");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Admin");
    return $results;
}

function getAdminByCredentials($username, $password) 
{
    global $pdo;
    $query = "SELECT * FROM admins WHERE username = :username AND password = :password";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->execute();
    $admin = $statement->fetch(PDO::FETCH_ASSOC);

    if ($admin) 
    {
        return $admin;
    } 
    else 
    {
        return false;
    }
}