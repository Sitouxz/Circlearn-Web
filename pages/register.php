<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up | Circlearn</title>
    <link rel="shortcut icon" href="../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/login2.css" />
</head>

<body>
    <div class="login-container" style="overflow-y: scroll;">
        <div class="logo">
            <img src="../assets/img/Logo.svg" alt="logo">
        </div>
        <div class="text">
            <p>Create a free Circlearn account
                and join with the other students
                for new experience of studying</p>
            <h1>LOGIN</h1>
        </div>
        <div class="form">
            <form action="../assets/include/signup.inc.php" method="post">
                <label>
                    <span>Username</span><br>
                    <input type="text" name="username" />
                </label>
                <label>
                    <span>Email</span><br>
                    <input type="email" name="email" />
                </label>
                <div class="gender">
                    <span class="text">Gender</span> <br>
                    <label class="container">
                        <input type="radio" name="gender" value="Male" /> Male
                    </label>
                    <label class="container">
                        <input type="radio" name="gender" value="Female" /> Female
                    </label>
                </div>
                <label class="dob">
                    <span>Date of Birth</span><br>
                    <input type="date" name="dob" />
                </label>
                <label>
                    <span>Password</span><br>
                    <input type="password" name="pwd" />
                </label>
                <label>
                    <span>Confirm password</span><br>
                    <input type="password" name="repwd" />
                </label>
                <?php
                if(isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    if ($_GET["error"] == "invalidemail") {
                        echo "<p>Invalid Email!</p>";
                    }
                    if ($_GET["error"] == "pwdnotmatch") {
                        echo "<p>Password doesn't match!</p>";
                    }
                    if ($_GET["error"] == "emailtaken") {
                        echo "<p>This email is already registered!</p>";
                    }
                    if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Something went wrong, try agaian!</p>";
                    }
                    if ($_GET["error"] == "none") {
                        echo "<p>You have signed up!</p>";
                    }
                }
                ?>
                <input type="hidden" name="mobi" value="mobile" />
                <input type="hidden" name="register" value="reg" />
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <div class="bottom-text">
            <p>Already have an account??</p>
            <a href="login.mobi.php">Sign in</a>
        </div>
    </div>
</body>

</html>