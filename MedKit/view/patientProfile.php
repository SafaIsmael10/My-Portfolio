<!doctype html>
<html>
<head>
    <title>Patient Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patientProfile.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Patient Profile</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <div class="content">
    <section class="patient-details-section">
        <h3>
            <p><strong>Patient ID:</strong> <?= $patientData["patientid"]; ?></p>
            <p><strong>Patient Name:</strong> <?= $patientData["fullname"]; ?></p>
            <p><strong>Date Of Birth:</strong> <?= $patientData["dob"]; ?></p>
            <p><strong>Gender:</strong> <?= $patientData["gender"]; ?></p>
            <p><strong>Address:</strong> <?= $patientData["address"]; ?></p>
            <p><strong>Email:</strong> <?= $patientData["email"]; ?></p>
            <p><strong>Phone:</strong> <?= $patientData["phone"]; ?></p>
            <p><strong>Blood Type:</strong> <?= $patientData["bloodtype"]; ?></p>
            <p><strong>Allergies:</strong> <?= $patientData["allergies"]; ?></p>
        </h3>
    </section>
    <div class="image-mh">
    <section class="profile-image-section">
        <?php if (!empty($patientData["profileimage"])) : ?>
            <img src="<?= $patientData["profileimage"] ?>" alt="profile-image"/>
        <?php else : ?>
            <img src="https://via.placeholder.com/200/76B852/FFFFFF/?text=Profile+Image" alt="default-image"/>
        <?php endif ?>  
    </section>
    <section class="image-upload-section">
        <form class="image-upload-form" method="post" action="" enctype="multipart/form-data">
            <label for="profileimage">Update your profile image</label>
            <input type="file" id="profileimage" name="profileimage" accept="image/*">
            <input class="upload-submit" type="submit" name="upload" value="Upload">
        </form>
    </section>
    <section class="medical-history-section">
        <form class="medical-history-form" method="post" action="medicalHistory_C.php?patientid=<?= $userID ?>">
            <h2>Medical History</h2>
            <input class="medical-history-submit" type="submit" name="medicalhistory" value=">">
        </form>
    </section>
    </div>
    </div>
</body>
</html>