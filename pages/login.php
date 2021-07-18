<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/Register | Circlearn</title>
    <link
      rel="shortcut icon"
      href="../assets/img/Logo.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../assets/css/login.css" />
  </head>
  <body>
    <div class="cont">
      <form class="form sign-in" action="../assets/include/login.inc.php" method="post">
        <h2>Sign In</h2>
        <label>
          <span>Email</span>
          <input type="email" name="email" />
        </label>
        <label>
          <span>Password</span>
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
        <button type="submit" class="submit" name="submit">Log-in</button>
        <p class="forgot-pass">Forgot Password ?</p>
      </form>

      <div class="sub-cont">
        <div class="img">
          <div class="img-text m-up">
            <img src="../assets/img/Circlearn-logo.svg" alt="logo" />
            <p>
              Create a free Circlearn account <br />
              and join with the other students <br />
              for new experience of studying
            </p>
          </div>
          <div class="img-text m-in">
            <img src="../assets/img/Circlearn-logo.svg" alt="Logo" />
            <p>
              Rejoin the circle, <br />
              Enter the community <br />
              and learn together
            </p>
          </div>
          <div class="img-btn">
            <span class="m-up">Sign Up</span>
            <span class="m-in">Sign In</span>
          </div>
        </div>
        <form class="form sign-up" action="../assets/include/signup.inc.php" method="post">
          <h2>Sign Up</h2>
          <div class="name">
            <label>
              <span>First name</span>
              <input type="text" name="fname"/>
            </label>
            <label>
              <span>Last name</span>
              <input type="text" name="lname"/>
            </label>
          </div>
          <label>
            <span>Email</span>
            <input type="email" name="email"/>
          </label>
          <label>
            <span>Gender</span>
            <div class="gender">
              <input type="radio" name="gender" /> Male
              <input type="radio" name="gender" /> Female
            </div>
          </label>
          <label>
            <span>Phone Number</span>
            <input type="tel" />
          </label>
          <label>
            <span>Address</span>
            <input type="text" />
          </label>
          <div class="password">
            <label>
              <span>Password</span>
              <input type="password" name="pwd"/>
            </label>
            <label>
              <span>Confirm password</span>
              <input type="password" name="repwd"/>
            </label>
          </div>
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
          <button type="submit" class="submit" name="submit">Sign Up Now</button>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="../assets/js/login.js"></script>
  </body>
</html>
