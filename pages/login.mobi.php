<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in | Circlearn</title>
    <link rel="shortcut icon" href="../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/login2.css" />
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="../assets/img/Logo.svg" alt="logo">
        </div>
        <div class="text">
            <p>Rejoin the circle,
                Enter the community
                and learn together</p>
            <h1>LOGIN</h1>
        </div>
        <div class="form">
            <form action="../assets/include/login.inc.php" method="post">
                <label>
                    <span>Username/Email</span><br>
                    <input type="text" name="email" />
                </label>
                <label>
                    <span>Password</span><br>
                    <input type="password" name="pwd" />
                </label>
                <?php
                if(isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    if ($_GET["error"] == "wronglogin") {
                        echo "<p>Failed to login!</p>";
                    }
                    if ($_GET["error"] == "noconnect") {
                      echo "<p>Can't connect!</p>";
                  }
                }
                ?>
                <input type="hidden" name="mobi" value="mobile" />
                <button type="submit" name="submit">Sign in</button>
            </form>
        </div>
        <div class="bottom-text">
            <p>Don't have an account?</p>
            <a href="register.php">Sign up</a>
        </div>
    </div>
</body>

</html>