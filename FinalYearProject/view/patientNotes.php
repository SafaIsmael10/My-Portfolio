<!doctype html>
<html>
<head>
    <title>Patient Notes Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/patientNotes.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Patient Notes</h1></div>
        <div class="dochome"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <h3><?= $appointmentData["patientnotes"]; ?></h3>
</body>
</html>