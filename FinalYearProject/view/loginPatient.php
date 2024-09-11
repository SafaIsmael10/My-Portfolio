<!doctype html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginPatient.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Login</h1></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="login-section">
        <form class="login-form" method="post" action="">
            <input type="text" name ="username" placeholder="Username" required>
            <input type="password" name ="password" placeholder="Password" required>
            <input class="login-submit" type="submit" name="login" value="Login">
        </form>
    </section>
    <section class="register-navigate-section">
        <form class="register-navigate-form" method="post" action="../controller/registerPatient_C.php">
            <p>Click if you want to register a new account</p>
            <input class="register-navigate" type="submit" name="register" value="Register">
        </form>
    </section>
    <section class="forgot-password-section">
        <a href="../controller/forgotPassword_C.php">Forgot Password?</a>
    </section>
</body>
</html>