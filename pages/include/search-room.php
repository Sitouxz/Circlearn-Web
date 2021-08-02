<?php
require_once '../../assets/include/dbh.inc.php';
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated 
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        ORDER BY timeCreated DESC;";
    $result = mysqli_query($conn,$sql);
    $room = mysqli_fetch_assoc($result);
if(isset($_POST['search'])){
    
    $search = $_POST['search'];
    if (!empty($search)) {
        do{
            if (strpos($room['roomName'], $search)!==false){
                include 'room.php';
            }
            //nanti mo kase pisah mana hasil search by roomId dan mana yang hasil search by roomName
            //nanti mo tambah hasil search by Subject
            if ($room['roomId'] === $search){
                include 'room.php';
            }
        }while ($room = mysqli_fetch_assoc($result));
    }
    else{
        include 'default-room.php';
    }
}
?>