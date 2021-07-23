<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Circlearn" />
<meta name="description"
    content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
<!-- HTML Meta Tags -->
<title>Rooms | Circlearn</title>
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
<link rel="stylesheet" href="../../assets/css/createRoom.css" />
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <header>
        <div class="left">
            <img src="../../assets/img/Hero-logo.svg" alt="Logo" />
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Search room" />
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="right">
            <button>Create Room</button>
            <div class="user">
                <?php
              echo "
              <p>".$_SESSION["nick"]."</p>
              ";
              ?>
                <img src="../../assets/img/User-avatar.png" alt="User" />
            </div>
            <a href="../../assets/include/logout.inc.php">
                <img src="../../assets/img/Exit.svg" alt="" />
            </a>
        </div>
    </header>
    <div class="dropdown" id="myLinks">
        <ul>
            <li><a href="#">Profile</a></li>
            <hr>
            <li><a href="#">Privacy</a></li>
            <hr>
            <li><a href="#">Menu</a></li>
            <hr>
            <li><a href="#">Menu</a></li>
            <hr>
            <li class="log-out-link"><a href="#">log out</a></li>
        </ul>
    </div>

    <div class="content-header">
        <ul>
            <li class="active"><a href="#">Create Room</a></li>
            <li><a href="#">Manage Room</a></li>
        </ul>
    </div>

    <div class="croom-container">
        <div class="cbanner">
            <div class="banner"></div>
            <button>Change Banner</button>
        </div>

        <div class="room-info-container">
            <div class="room-info">
                <label>
                    <span>Room name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Room Subject</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Room Description</span>
                    <textarea name="" id="" cols="50" rows="10"></textarea>
                </label>
            </div>
            <button>Create</button>
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