<header>
        <div class="left">
            <img src="../assets/img/Hero-logo.svg" alt="Logo" />
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
            if (!empty($_SESSION["nick"])) {
                echo "<p>".$_SESSION["nick"]."</p>";
            }
            else{
                echo "<p>Signup please!</p>";
            }
            
        ?>
                <img src="../assets/img/User-avatar.png" alt="User" />
            </div>
            <a href="../assets/include/logout.inc.php">
                <img src="../assets/img/Exit.svg" alt="" />
            </a>
        </div>
    </header>