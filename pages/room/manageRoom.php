<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Circlearn" />
    <meta name="description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Circlearn" />
    <meta property="og:description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <meta property="og:image" content="./assets/img/Hero-logo.svg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="sitouxz.github.io" />
    <meta property="twitter:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta name="twitter:title" content="Circlearn" />
    <meta name="twitter:description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <meta name="twitter:image" content="./assets/img/Hero-logo.svg" />
    <title>Create Room | Circlearn</title>
    <link rel="shortcut icon" href="../../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../../assets/css/manageRoom.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <?php include 'header.php'?>
    <div class="content-header">
        <ul>
            <li><a href="#">Create Room</a></li>
            <li class="active"><a href="#">Manage Room</a></li>
        </ul>
    </div>

    <div class="croom-container">
        <div class="card">
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
            <div class="croom-card">
                <div class="banner"></div>
                <div class="croom-btn">
                    <a href="#" class="join">Join</a>
                    <a href="#" class="edit">Edit</a>
                    <a class="delete">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-container">
            <div class="footer-nav">
                <img src="../../assets/img/Footer-logo.svg" alt="Logo" />
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="copyright">
                <p>&#169; 2021 copyright all right reserved</p>
                <div class="social-media">
                    <a href="#"><i class="bx bxl-instagram"> </i></a>
                    <a href="#"><i class="bx bxl-twitter"> </i></a>
                    <a href="#"><i class="bx bxl-facebook"> </i></a>
                </div>
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    </script>
</body>

</html>