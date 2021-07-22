<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Circlearn" />
    <meta name="description" content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students." />
    <!-- HTML Meta Tags -->
    <title>Rooms | Circlearn</title>
    <meta name="description" content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students." />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Circlearn" />
    <meta property="og:description" content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students." />
    <meta property="og:image" content="./assets/img/Hero-logo.svg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="sitouxz.github.io" />
    <meta property="twitter:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta name="twitter:title" content="Circlearn" />
    <meta name="twitter:description" content="Join The Circle And Learn Together
according to the subjects you are interested in
With Productive Community of Students." />
    <meta name="twitter:image" content="./assets/img/Hero-logo.svg" />
    <title>Profile | Circlearn</title>
    <link rel="shortcut icon" href="../../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../../assets/css/profile.css" />
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
                <a href="javascript:void(0);" class="icon" onclick="profilePopup()">
                    <img src="../../assets/img/User-avatar.png" alt="User" />
                </a>
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
    <div class="profile-popup" id="popup">
        <div class="close-btn"><a href="javascript:void(0);" class="icon" onclick="closeProfile()">
                <i class="fa fa-close"></i>
            </a></div>
        <div class="profile-container">
            <div class="profile-nav">
                <ul>
                    <li class="active"><a href="#">Basic Info</a></li>
                    <li><a href="javascript:void(0);" onclick="bookmarks()">Bookmarks</a></li>
                    <li class="logout"><a href="#">Log out</a></li>
                </ul>
            </div>
            <div class="content-side">


                <div class="profile-content" id="basic">
                    <div class="top">
                        <div class="user">
                            <div class="profile-picture"></div>
                            <div class="user-name">
                                <h4>Name</h4>
                                <p>Jokowi</p>
                            </div>
                        </div>
                        <div class="user-info">
                            <h4>Gender</h4>
                            <p>Male</p>
                            <h4>Address</h4>
                            <p>Wakanda, USA</p>
                            <h4>Email</h4>
                            <p>Budimeister@gmail.com</p>
                            <h4>Phone Number</h4>
                            <p>08123456789</p>
                            <br>
                            <button>Edit Profile</button>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="other-info">
                            <h4>Other Information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit similique consequuntur
                                impedit
                                consectetur quas voluptatem doloribus expedita pariatur, dicta soluta quaerat
                                reprehenderit
                                autem
                                provident mollitia aspernatur tempore! Vel, inventore a?</p>
                        </div>
                    </div>
                </div>

                <div class="bookmarks-content" id="bookmarks">
                    <ul>
                        <li><a href="#">Room 1</a></li>
                        <li><a href="#">Room 2</a></li>
                        <li><a href="#">Room 3</a></li>
                    </ul>
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

    function closeProfile() {
        var x = document.getElementById("popup");
        x.style.display = "none";
    }

    function profilePopup() {
        var x = document.getElementById("popup");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function bookmarks() {
        var x = document.getElementById("basic");
        var z = document.getElementById("bookmarks");
        if (x.style.display === "block") {
            x.style.display = "none";
            y.style.display = "block"
        } else {
            x.style.display = "block";
            y.style.display = "none"
        }
    }
    </script>
</body>

</html>