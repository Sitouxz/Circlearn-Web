<?php
session_start();
function emptyRoomInput($roomName, $roomSubject, $link){
    if (empty($roomName) || empty($roomSubject) || empty($link)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function roomExists($conn,$roomName){
    $sql = "SELECT * FROM room WHERE roomName = '$roomName';";
    $result = mysqli_query($conn, $sql);
    if ($room = mysqli_fetch_assoc($result)) {
        return $room;
    }
    else{
        $result = false;
        return $result;
    }
}
function invalidLink($link){
    return false;
}

function createRoom($conn, $roomName, $roomSubject, $link, $des){
    
    $sql = "INSERT INTO room (roomName,roomSubject,link,des) VALUES ('$roomName', '$roomSubject', '$link', '$des');";
    mysqli_query($conn,$sql);
    $room = roomExists($conn,$roomName);
        if($room === false){
            header("location: ../../pages/login.php?error=emptyInfo");
            exit();
        }
    $sql = 
    "INSERT INTO _create (userId, roomId) 
    SELECT users.userId, room.roomId
    FROM users, room 
    WHERE users.userId='$_SESSION[userid]'
    AND room.roomId='$room[roomId]';";
    mysqli_query($conn,$sql);
        
    header("location: ../../pages/mainPage.php?Created=".$roomName."");
}
function setBanner($conn){
    $banner = $_FILES['banner'];

    $Name = $banner['name'];
    $TmpName = $banner['tmp_name'];
    $Size = $banner['size'];
    $Error = $banner['error'];
    $Type = $banner['type'];

    $Ext = explode('.', $Name);
    $ActualExt = strtolower(end($Ext));

    $allowed = array('jpg');
    
                $NameNew = "room".$id.".".$ActualExt;
                $Destination = '../upload/'.$NameNew;
                move_uploaded_($TmpName, $Destination);
                $sql = "UPDATE banner SET status=1 WHERE userId='$id';";
                mysqli_query($conn,$sql);