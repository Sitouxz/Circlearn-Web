
<?php
            
            echo "
            <article>
            <div class=\"img-container\">";if ($room['status'] == 1) {
              echo "<img src='../assets/upload/banner".$room['roomId'].".jpg' class='banner2'/>";
            }else {
              echo "<img src='../assets/img/card-banner.png' class='banner2'/>";
            }
            
            
            echo "
            <p class='room-id'>".$room['roomId']. " | " .$room['userName']."</p>
            </div>
            <div class=\"text\">
              <h3>Name</h3>
              <p>".$room['roomName']."</p>
              <h3>Subject</h3>
              <p>".$room['roomSubject']."</p>";
              echo "
              <a href=\"".$room['link']."\"><button>Join!</button></a>
            </div>
            </article>
            ";
?>




