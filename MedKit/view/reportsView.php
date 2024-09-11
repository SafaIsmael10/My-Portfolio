<!doctype html>
<html>
<head>
    <title>Reports Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reportsView.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Reports</h1></div>
        <section class="logout-section">
            <form class="logout-form" method="post" action="">
                <input class="logout-submit" type="submit" name="logout" value="Logout">
            </form>
        </section>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <table>
        <thead></thead>
        <tbody>
            <?php foreach ($reports as $rep) : ?>
            <tr>
                <td><?= $rep->reportid ?></td>
                <td><?= $rep->report ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>