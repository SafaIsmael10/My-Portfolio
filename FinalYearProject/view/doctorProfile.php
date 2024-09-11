<!doctype html>
<html>
<head>
    <title>Doctor Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctorProfile.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Doctor Profile</h1></div>
        <div class="dochome"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <div class="content">
    <section class="doctor-details-section">
        <h3>
            <p><strong>Doctor ID:</strong> <?= $doctorData["doctorid"]; ?></p>
            <p><strong>Doctor Name:</strong> <?= $doctorData["fullname"]; ?></p>
            <p><strong>Date Of Birth:</strong> <?= $doctorData["dob"]; ?></p>
            <p><strong>Gender:</strong> <?= $doctorData["gender"]; ?></p>
            <p><strong>Email:</strong> <?= $doctorData["email"]; ?></p>
            <p><strong>Phone:</strong> <?= $doctorData["phone"]; ?></p>
            <p><strong>Role:</strong> <?= $doctorData["role"]; ?></p>
            <p><strong>Languages:</strong> <?= $doctorData["languages"]; ?></p>
        </h3>
    </section>
    <div class="image-bio">
    <section>
        <img src="https://via.placeholder.com/200/76B852/FFFFFF/?text=Profile+Image" alt="default-image"/>
    </section>
    <section class="biography-section">
        <p><strong>Biography:</strong> <?= $doctorData["biography"]; ?></p>
    </section>
    </div>
    </div>
</body>
</html>