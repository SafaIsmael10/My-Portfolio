<!doctype html>
<html>
<head>
    <title>Book Appointment Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bookAppointment.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Book An Appointment</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="book-section">
        <form class="book-form" id="book-form" method="post" action="">
            <div class = appointment-details>
            <h3>Appointment Details</h3>
            <div>
                <select name="type" required>
                    <option value="" disabled selected>Appointment Type</option>
                    <option value="Consultation">Consultation</option>
                    <option value="Online Consultation">Online Consultation</option>
                    <option value="COVID Test">COVID Test</option>
                </select>
            </div><br>
            <div>
                <select name="location" required>
                    <option value="" disabled selected>Location</option>
                    <option value="Kingston Clinic">Kingston Clinic</option>
                    <option value="Fulham Clinic">Fulham Clinic</option>
                    <option value="Kew Clinic">Kew Clinic</option>
                </select>
            </div><br>
            <div>
                <input type="date" name ="date" placeholder="Date" min="<?= date('Y-m-d'); ?>" required>
            </div><br>
            <div>
                <input type="time" name ="time" placeholder="Time" required>
                <script src="../javascript/time.js"></script>
            </div><br>
            <div>
                <label>Doctor Gender</label>
                <div>
                    <label for="male">Male</label>
                    <input type="radio" name="doctorgender" value="Male" onchange="updateDoctorList()">
                    <label for="female">Female</label>
                    <input type="radio" name="doctorgender" value="Female" onchange="updateDoctorList()">
                </div>
            </div><br>
            <div>
                <select id="selectedDoctor" name="doctor" required>
                    <option value="" disabled selected>Doctor</option>
                    <?php foreach ($doctors as $doctor) : ?>
                    <option data-gender="<?= $doctor->gender ?>" value="<?= $doctor->fullname ?>">Dr. <?= $doctor->fullname ?></option>
                    <?php endforeach ?>
                </select>
            </div><br>
            <script>
                function updateDoctorList() 
                {
                    var selectedGender = document.querySelector("input[name='doctorgender']:checked").value;
                    var doctorDropdown = document.getElementById("selectedDoctor");

                    doctorDropdown.innerHTML = "<option value='' disabled selected>Doctor</option>";
        
                    <?php foreach ($doctors as $doctor) : ?>
                    if ("<?= $doctor->gender ?>" === selectedGender) 
                    {
                        var option = document.createElement("option");
                        option.value = "<?= $doctor->fullname ?>";
                        option.text = "Dr. <?= $doctor->fullname ?>";
                        doctorDropdown.add(option);
                    }
                    <?php endforeach ?>
                }
            </script>
            </div>
            <div class="patient-notes-payment">
            <h3>Patient Notes</h3>
            <p>Please use the body diagram below to help find your issue, so you can specify it in the notes. This will save you time in your appointment.</p> 
            <div class="body-diagram"><?php include "../bodyDiagram.php" ?></div>
            <input type="text" name ="patientnotes" placeholder="Patient Notes" required>
            <h3>Payment Details</h3>
            <section class="card-info-section">
                <input type="text" id="cardnumber" name ="cardnumber" placeholder="Card Number" required> 
                <input type="text" name ="cardname" placeholder="Name On Card" required>
                <input type="text" id="expirydate" name ="expirydate" placeholder="Expiry Date" required>
                <input type="text" id="cvv" name ="cvv" placeholder="CVV" required>
            </section>
            </div>
            <input class="book-submit" id="book-submit" type="submit" value="Book">
        </form>
    </section>
    <script src="../javascript/payment.js"></script>
</body>
</html>