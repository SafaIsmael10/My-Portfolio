<!doctype html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginDoctor.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Login</h1></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="doc-login-section">
        <form class="doc-login-form" method="post" action="">
            <input type="text" name ="username" placeholder="Username" required>
            <input type="password" name ="password" placeholder="Password" required>
            <input class="doc-login-submit" type="submit" name="login" value="Login">
        </form>
    </section>
</body>
</html>