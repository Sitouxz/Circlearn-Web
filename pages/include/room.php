
<?php
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
              <p>";
              if ($room["des"]==NULL||$room["des"]=='') {
                 echo "-";
              }else{
                 echo $room["des"];
              }
              echo "
              </p>
              <a href=\"".$room['link']."\"><button>Join!</button></a>
            </div>
            </article>
            ";
?>




