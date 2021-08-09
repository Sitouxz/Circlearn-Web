<?php
    $id = $_SESSION["userid"];
    $order = "ORDER BY timeCreated DESC";
    if (isset($_GET['sort'])) {
        if ($_GET['sort'] == "oldest") {
            $order = "ORDER BY timeCreated ASC";
        }
    }
    $sql = "SELECT room.roomId, users.userId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated, room.del
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId)
        WHERE users.userId = $id AND room.del = 'false'";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    $now = date("Y-m-d H:i:s");
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {
            $join = $room['timeCreated'];
            $date1 = new DateTime($join);
            $date2 = new DateTime($now);

            // The diff-methods returns a new DateInterval-object...
            $diff = $date2->diff($date1);

            // Call the format method on the DateInterval-object
            $joinTime = $diff->format('%dd %hh');
            echo "
            <article>
                <div class='img-container history-card manage-card'>";
                if ($room['status'] == 1) {
                  echo "<img src='../assets/upload/banner".$room['roomId'].".jpg?".mt_rand()."' class='banner2'/>";
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
                <div class='history-text bot'>
                  <form method='POST' action='editRoom.php' class='edit'>
                    <a onclick=\"form.submit()\"><button id='edit'>Edit</button></a>
                    <input type='hidden' value=\"".$room['link']."\" name='link'>
                    <input type='hidden' value=\"".$room['roomSubject']."\" name='roomSubject'>
                    <input type='hidden' value=\"".$room['roomName']."\" name='roomName'>
                    <input type='hidden' value=\"".$room['des']."\" name='des'>
                    <input type='hidden' value=\"".$room['roomId']."\" name='roomId'>
                  </form>
                  <form method='POST' action='include/delRoom.php' class='del'>
                    <a onclick=\"form.submit()\"><button id='del'>Delete</button></a>
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