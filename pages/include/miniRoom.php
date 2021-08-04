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
                <a href='".$room['link']."'><button>Join!</button></a>
            </div>
        </article>
        ";
?>





