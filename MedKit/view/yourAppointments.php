<!doctype html>
<html>
<head>
    <title>Appointments Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/yourAppointments.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Your Appointments</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="your-appointments-section">
        <ul>
            <?php foreach ($appointments as $app) : ?>
                <div class="appointment">
                    <?= $app->type ?><br>
                    <?= $app->location ?><br>
                    <?= $app->date ?><br>
                    <?= $app->time ?><br>
                    <?= $app->doctorgender ?><br>
                    <?= $app->doctor ?><br>
                    <a href="cancelAppointment_C.php?appointmentid=<?= $app->appointmentid ?>"><button>Cancel</button></a><br>
                </div>
            <?php endforeach ?>
        </ul>
    </section>
</body>
</html>