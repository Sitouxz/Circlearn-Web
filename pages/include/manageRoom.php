<?php
    $order = "ORDER BY timeCreated DESC";
    if (isset($_GET['sort'])) {
        if ($_GET['sort'] == "oldest") {
            $order = "ORDER BY timeCreated ASC";
        }
    }
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated 
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        $order;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    $now = date("Y-m-d H:i:s");
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {
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
                    <p class='room-id' id='time'>".$joinTime."</p>
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
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>
<script>
$(document).ready(function() {
    $('#show_more').show();
})
</script>