<!doctype html>
<html>
<head>
    <title>Register Success Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerSuccess.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Register Success</h1></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <h2>Your account has been successfully created!</h2>
    <form class="to-login-form" method="post" action="../controller/loginPatient_C.php">
        <input class="to-login-submit" type="submit" name="tologin" value="Login">
    </form>
</body>
</html>