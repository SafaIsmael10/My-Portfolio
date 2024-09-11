<!doctype html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeDoctor.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Home</h1></div>
        <section class="logout-section">
            <form class="logout-form" method="post" action="">
                <input class="logout-submit" type="submit" name="logout" value="Logout">
            </form>
        </section>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <div class="content">
    <section class="schedule-section">
        <h2>Schedule</h2>
        <h3>Date: <?= $todayDate ?></h3>
        <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Appointment Type</th>
                <th>Patient</th>
                <th>Location</th>
                <th>Patient Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schedule as $app) : ?>
            <tr>
                <td><?= $app->time ?></td>
                <td><?= $app->type ?></td>
                <td>
                    <?php 
                    $patientData = getIndividualPatient($app->patientid);
                    if ($patientData)
                    {
                        echo $patientData["fullname"];
                    }
                    ?>
                </td>
                <td><?= $app->location ?></td>
                <td><a href="patientNotes_C.php?appointmentid=<?= $app->appointmentid ?>">Notes</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </section>
    <div class="profile-drafts">
    <section class="doctor-profile-section">
        <form class="doctor-profile-form" method="post" action="../controller/doctorProfile_C.php">
            <h2>Doctor Profile</h2>
            <p>View and edit your profile for patients to see.</p>
            <input class="doctor-profile-submit" type="submit" name="doctorprofile" value=">">
        </form>
    </section>
    <section class="service-drafts-section">
        <form class="service-drafts-form" method="post" action="../controller/serviceDrafts_C.php">
            <h2>Service Drafts</h2>
            <p>Quickly complete tasks with the templates provided.</p>
            <input class="service-drafts-submit" type="submit" name="services" value=">">
        </form>
    </section>
    </div>
    </div>
</body>
</html>