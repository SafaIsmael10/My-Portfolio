<!doctype html>
<html>
<head>
    <title>Doctor Profile Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctorProfilePV.css">
</head>
<body>
    <header>
    <div class="logo"></div>
        <div class="title"><h1>Doctor Profile</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <div class="content">
    <section class="doctorpv-details-section">
        <h3>
            <p><strong>Doctor ID:</strong> <?= $doctorData["doctorid"]; ?></p>
            <p><strong>Doctor Name:</strong> <?= $doctorData["fullname"]; ?></p>
            <p><strong>Gender:</strong> <?= $doctorData["gender"]; ?></p>
            <p><strong>Role:</strong> <?= $doctorData["role"]; ?></p>
            <p><strong>Languages:</strong> <?= $doctorData["languages"]; ?></p>
        </h3>
    </section>
    <div class="image-bio">
    <section>
        <img src="https://via.placeholder.com/200/76B852/FFFFFF/?text=Profile+Image" alt="default-image"/>
    </section>
    <section class="biographypv-section">
        <p><strong>Biography:</strong> <?= $doctorData["biography"]; ?></p>
    </section>
    </div>
    </div>
</body>
</html>