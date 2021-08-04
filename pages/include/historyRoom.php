<?php
    //$sort = ['roomSort'];
    $sql = "SELECT _join.joinId, room.roomId, users.userName, room.roomName, room.roomSubject, room.link, banner.status, _join.joinTime
    FROM (((`_join` 
        LEFT JOIN room ON _join.roomId = room.roomId) 
        LEFT JOIN users ON _join.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        ORDER BY joinTime DESC LIMIT 10;";
    $result = mysqli_query($conn,$sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {    
        include 'miniRoom.php';
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>