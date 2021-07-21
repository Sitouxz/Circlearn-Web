<?php
    session_start();
?>
<header>
      <div class="left">
        <img src="../assets/img/Hero-logo.svg" alt="Logo" />
        <nav>
          <ul>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Menu</a></li>
          </ul>
        </nav>
      </div>
      <div class="right">
        <button>Button</button>
        <div class="user">
          <?php
          echo "<p>".$_SESSION["nick"]."</p>";
          ?>
          <img src="../assets/img/User-avatar.png" alt="User" />
        </div>
        <a href="../assets/include/logout.inc.php">
          <img src="../assets/img/Exit.svg" alt="" />
        </a>
      </div>
    </header>