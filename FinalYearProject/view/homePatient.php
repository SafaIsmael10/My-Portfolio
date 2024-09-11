<!doctype html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homePatient.css">
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
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <div class="grid">
    <section class="patient-profile-section">
        <form class="patient-profile-form" method="post" action="../controller/patientProfile_C.php">
            <h2>Patient Profile</h2>
            <p>View your profile which includes your general details, medical details, and medical history.</p>
            <input class="patient-profile-submit" type="submit" name="patientprofile" value=">">
        </form>
    </section>
    <section class="your-appointments-section">
        <form class="patient-profile-form" method="post" action="../controller/yourAppointments_C.php">
            <h2>Your Appointments</h2>
            <p>View or cancel your upcoming appointments.</p>
            <input class="your-appointments-submit" type="submit" name="yourappointments" value=">">
        </form>
    </section>
    <section class="book-appointments-section">
        <form class="patient-profile-form" method="post" action="../controller/bookAppointments_C.php">
            <h2>Book An Appointment</h2>
            <p>Find clinics near you and book an appointment.</p>
            <input class="book-appoinments-submit" type="submit" name="bookappointments" value=">">
        </form>
    </section>
    <section class="meet-doctors-section">
        <form class="patient-profile-form" method="post" action="../controller/doctorList_C.php">
            <h2>Meet Our Doctors</h2>
            <p>Have a look at our talented team of doctors to help you decide which doctor you would like to see in your appointments.
               Languages spoken by the doctors are included to help non-English speakers.</p>
            <input class="meet-doctors-submit" type="submit" name="meetdoctors" value=">">
        </form>
    </section>
    <section class="service-prices-section">
        <form class="patient-profile-form" method="post" action="../controller/servicePrices_C.php">
            <h2>Service Prices</h2>
            <p>Take a look at the costs of our services.</p>
            <input class="service-prices-submit" type="submit" name="serviceprices" value=">">
        </form>
    </section>
    <section class="report-issue-section">
        <form class="patient-profile-form" method="post" action="../controller/reportIssue_C.php">
            <h2>Report An Issue</h2>
            <p>If there are any issues with the website or our services, feel free to report them here.</p>
            <input class="report-issue-submit" type="submit" name="reportissue" value=">">
        </form>
    </section>
    </div>
</body>
</html>