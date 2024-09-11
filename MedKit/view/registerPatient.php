<!doctype html>
<html>
<head>
    <title>Register Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerPatient.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <div class="title"><h1>Register</h1></div>
        <div class="contact"></div>
        <script src="../javascript/headerItems.js"></script>
    </header>
    <section class="register-section">
        <form class="register-form" method="post" action="" enctype="multipart/form-data">
           <div><input type="text" name ="username" placeholder="Username" required></div><br>
           <div><input type="password" name ="password" placeholder="Password" required></div><br>
           <div><input type="email" name ="email" placeholder="Email" required></div><br>
           <div><input type="text" name ="phone" placeholder="Phone Number" required></div><br>
           <div><input type="text" name ="fullname" placeholder="Full Name" required></div><br>
           <div><input type="text" name ="dob" placeholder="Date Of Birth" required></div><br>
            <div>
                <label>Gender</label>
                <div>
                    <label for="male">Male</label>
                    <input type="radio" name ="gender" value="Male" required>
                    <label for="female">Female</label>
                    <input type="radio" name ="gender" value="Female" required>
                </div>
            </div><br>
            <div><input type="text" name ="address" placeholder="Address" required></div><br>
            <div>
                <select name="bloodtype" required>
                    <option value="" disabled selected>Blood Type</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div><br>
            <div><input type="text" name ="allergies" placeholder="Allergies" required></div><br>
            <div>
               <label for="medicalhistory">Medical History (.pdf)</label>
               <input type="file" id="medicalhistory" name="medicalhistory" accept=".pdf">
            </div><br>
            <div><input class="register-submit" type="submit" name="register" value="Register"></div>
        </form>
    </section>
</body>
</html>