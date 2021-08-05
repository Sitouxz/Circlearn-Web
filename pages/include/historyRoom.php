<?php
    //$sort = ['roomSort'];
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, banner.status, _join.joinTime
    FROM ((((`_join` 
        LEFT JOIN _create ON _join.roomId = _create.roomId)
        LEFT JOIN room ON _join.roomId = room.roomId)
        LEFT JOIN users ON _create.userId = users.userId) 
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        ORDER BY joinTime DESC;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    $now = date("Y-m-d H:i:s");
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {  
        $created = $room['joinTime'];
        $date1 = new DateTime($created);
        $date2 = new DateTime($now);

        // The diff-methods returns a new DateInterval-object...
        $diff = $date2->diff($date1);

        // Call the format method on the DateInterval-object
        $joinTime = $diff->format('%hh ago');

        include 'miniRoom.php';
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>