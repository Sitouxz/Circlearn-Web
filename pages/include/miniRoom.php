<?php
        echo "
        <article>
            <div class='img-container history-card'>";
            if ($room['status'] == 1) {
              echo "<img src='../assets/upload/banner".$room['roomId'].".jpg' class='banner2'/>";
            }else {
              echo "<img src='../assets/img/card-banner.png' class='banner2'/>";
            }
            echo "
                <p class='room-id'>".$room['roomId']. " | " .$room['userName']."</p>
                <div class='bg-shadow'>
                    <h1>".$room['roomName']."</h1>
                    <p>".$room['roomSubject']."</p>
                </div>
            </div>
            <div class='history-text'>
              <form method='POST' action='include/joinRoom.php'>
                <a onclick=\"form.submit()\"><button id='join'>Join!</button></a>
                <input type='hidden' value=\"".$room['link']."\" name='link'>
                <input type='hidden' value=\"".$room['roomId']."\" name='roomId'>
              </form>
            </div>
        </article>
        ";
?>





