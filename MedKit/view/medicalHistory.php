<!doctype html>
<html>
<head>
    <title>Medical History Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/medicalHistory.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Medical History</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="medicalhistory-section">
        <?= "<iframe src='" . $medicalHistory['medicalhistory'] . "' width='100%' height='800px' style='border: none;''></iframe>"; ?>
    </section>
</body>
</html>