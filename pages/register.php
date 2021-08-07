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
            <p>Rejoin the circle,
                Enter the community
                and learn together</p>
            <h1>LOGIN</h1>
        </div>
        <div class="form">
            <form action="">
                <label>
                    <span>Username</span><br>
                    <input type="text" name="email" />
                </label>
                <label>
                    <span>Email</span><br>
                    <input type="text" name="email" />
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
                    <input type="password" name="pwd" />
                </label>
                <button>Submit</button>
            </form>
        </div>
        <div class="bottom-text">
            <p>Already have an account??</p>
            <a href="#">Sign in</a>
        </div>
    </div>
</body>

</html>