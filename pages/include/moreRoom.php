<?php
require_once '../../assets/include/dbh.inc.php';

    $count = $_POST['count'];
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated 
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        ORDER BY timeCreated DESC LIMIT 20;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    $now = date("Y-m-d H:i:s");
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {
            
            include 'room.php';
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>