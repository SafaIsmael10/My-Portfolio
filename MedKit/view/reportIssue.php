<!doctype html>
<html>
<head>
    <title>Report Issue Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reportIssue.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Report An Issue</h1></div>
        <div class="home"></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="report-issue-section">
        <form class="report-issue-form" method="post" action="">
            <div><textarea class="report-issue-input" name="report" rows="20" placeholder="Tell us about your issue..." required></textarea></div>
            <div><input class="report-issue-submit" type="submit" value="Report"></div>
        </form>
    </section>
</body>
</html>