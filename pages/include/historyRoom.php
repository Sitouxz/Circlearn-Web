<?php
    //$sort = ['roomSort'];
    $userid = $_SESSION["userid"];
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, banner.status, _join.joinTime, room.del
    FROM ((((`_join` 
        LEFT JOIN _create ON _join.roomId = _create.roomId)
        RIGHT JOIN room ON _join.roomId = room.roomId)
        LEFT JOIN users ON _create.userId = users.userId) 
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        WHERE room.del = 'false' AND _join.userId = $userid ORDER BY joinTime DESC LIMIT 15;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    $now = date("Y-m-d H:i:s");
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {  
        $join = $room['joinTime'];
        $date1 = new DateTime($join);
        $date2 = new DateTime($now);

        // The diff-methods returns a new DateInterval-object...
        $diff = $date2->diff($date1);

        // Call the format method on the DateInterval-object
        $joinTime = $diff->format('%hh %im ago');

        include 'miniRoom.php';
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>