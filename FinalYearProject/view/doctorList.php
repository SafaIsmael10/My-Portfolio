<!doctype html>
<html>
<head>
    <title>Doctor List Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/doctorList.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Doctor List</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="doctor-list-section">
        <ul>
            <?php foreach ($list as $doc) : ?>
                <li>
                    Dr. <?= $doc->fullname ?>
                    <a href="doctorProfilePV_C.php?doctorid=<?= $doc->doctorid ?>">
                    <button>View Profile</button>
                </a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
</body>
</html>