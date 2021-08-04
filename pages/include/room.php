
<?php
            
            echo "
            <article>
            <div class=\"img-container\">";
            if ($room['status'] == 1) {
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
              <p>".$room['roomSubject']."</p>
              <h3>description</h3>
              <p>";
              if ($room["des"]==NULL||$room["des"]=='') {
                 echo "-";
              }else{
                 echo $room["des"];
              }
              echo "
              </p>
              <form method='POST' action='include/joinRoom.php'>
                <a onclick=\"form.submit()\"><button id='join'>Join!</button></a>
                <input type='hidden' value=\"".$room['link']."\" name='link'>
                <input type='hidden' value=\"".$room['roomId']."\" name='roomId'>
              </form>
            </div>
            </article>
            ";
?>




