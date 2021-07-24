<?php
require_once '../../assets/include/dbh.inc.php';

    $count = $_POST['count'];
    $sql = "SELECT * FROM room LIMIT $count;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {
            echo "
            <article>
            <div class=\"img-container\">
              <p>".$room['roomId']. " | " .$room['creatorName']."</p>
            </div>
            <div class=\"text\">
              <h3>Name</h3>
              <p>".$room['roomName']."</p>
              <h3>Subject</h3>
              <p>".$room['roomSubject']."</p>
              <h3>description</h3>
              <p>
                ".$room['des']."
              </p>
              <a href=\"".$room['link']."\"><button>Join!</button></a>
            </div>
            </article>
            ";
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>