<?php
require_once '../../assets/include/dbh.inc.php';
    
if(isset($_POST['search'])){
    $sql = "SELECT * FROM room;";
    $result = mysqli_query($conn,$sql);
    $room = mysqli_fetch_assoc($result);
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