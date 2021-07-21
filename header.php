<?php
    session_start();
?>
<header class="topnav">
      <a href="index.php"><img src="./assets/img/Logo.svg" alt="logo" /></a>
      <nav>
        <ul id="myLinks">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <?php
                if (isset($_SESSION["fname"])) {
                    echo "
                    <h3>".$_SESSION["fname"]." - Login successfully</h3>
                    ";
                    echo "
                    <a href=\"assets/include/logout.inc.php\">Log-out</a>
                    ";
                }
                else{
                    echo "
                    <div class=\"button\">
                        <a href=\"./pages/login.php\" class=\"login\">Login / Sign up</a>
                    </div>
                    ";
                }
        ?>
      <a
        href="javascript:void(0);"
        class="icon bar-container"
        onclick="myFunction();
        xfunction(this)
        "
      >
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </a>
    </header>