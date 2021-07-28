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
            <input type="text" class="searchTerm" placeholder="Search room" id="search" />
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <div class="right">
        <a href="createRoom.php">
            <button>Create Room</button></a>
        <a href="javascript:void(0);" onclick="openProfile()">
        <div class="user">
            <?php
            if (!empty($_SESSION["nick"])) {
                echo "<p>".$_SESSION["nick"]."</p>";
            }
            else{
                echo "<p>Log-in please!</p>";
            }
            
        ?>
            <img src="../assets/img/User-avatar.png" alt="User" />
        </a>
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