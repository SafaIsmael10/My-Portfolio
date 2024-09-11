<!doctype html>
<html>
<head>
    <title>Cancel Appointment Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cancelAppointment.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Cancel Appointment</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <h2>Are you sure you want to cancel your appointment? You will only be refunded 50% of your appointment cost.</h2>
    <form class="cancel-appointment-form" method="post" action="">
        <input class="cancel-appointment-submit" type="submit" name="cancelappointment" value="Yes">
    </form>
    <form class="cancel-cancel-form" method="post" action="../controller/yourAppointments_C.php">
        <input class="cancel-cancel-submit" type="submit" name="cancelcancel" value="No">
    </form>
</body>
</html>