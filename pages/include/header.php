<?php
    session_start();
    require_once '../assets/include/dbh.inc.php';
?>
<link rel="stylesheet" href="../assets/css/profile.css" />
<link rel="stylesheet" href="../assets/css/headerFooter.css" />
<header>
    <div class="left">
        <a class="logo" href="../pages/mainPage.php">
            <img src="../assets/img/Hero-logo.svg" alt="Logo" />
        </a>
        <a href="javascript:void(0);" class="burger" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="wrap">
        <div class="search">
            <input type="search" class="searchTerm" placeholder="Search room" id="search" />
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <div class="right">
        <a href="createRoom.php">
            <button>Create Room</button></a>
            <?php
            if (!empty($_SESSION["nick"])) {
                echo "<a href='javascript:void(0);' class='username' onclick='openProfile()'>";
                echo "<p>".$_SESSION["nick"]."</p>";
                echo "<div class='user'>";
                $id = $_SESSION["userid"];
            $sql = "SELECT * FROM ava WHERE userId=$id;";
            $result = mysqli_query($conn, $sql);
            if ($rowAva = mysqli_fetch_assoc($result)) {
                if ($rowAva['status']==1) {
                    if(file_exists("../assets/upload/profile".$id.".jpg")) {
                        echo "<img class='avatar-mini' src='../assets/upload/profile".$id.".jpg?".mt_rand()."' alt='User' />";
                    }else{
                        echo "<img class='avatar-mini' src='../assets/img/profile-picture.png' alt='User' />";
                        $sql = "UPDATE ava SET status=0 WHERE userId='$id';";
                        mysqli_query($conn,$sql);
                    }
                }else {
                    echo "<img class='avatar-mini' src='../assets/img/profile-picture.png' alt='User' />";
                }
            }
            }else{
                echo "<a href='login.php'>";
                echo "<div class='user'>";
                echo "<p>Log-in!</p>";
            }
            echo "</a>";
        ?>
        </div>
        <a href="../assets/include/logout.inc.php" class="exit">
            <img src="../assets/img/Exit.svg" alt="" />
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
<?php include 'profile.php'?>
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