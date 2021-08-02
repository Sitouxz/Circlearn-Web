<?php
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

    $sql = "INSERT room(creatorId) VALUES ('$_SESSION[userid]');";
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

    $sql = "INSERT banner(roomId) VALUES ('$room[roomId]');";
    mysqli_query($conn,$sql);
    
}
function setBanner($conn,$fileName,$fileTmpName,$roomId){
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileNameNew = "banner".$roomId.".".$fileActualExt;
    $fileDestination = '../upload/'.$fileNameNew;
    move_uploaded_file($fileTmpName, $fileDestination);
    $sql = "UPDATE banner SET status='1' WHERE roomId='$roomId';";
        
    mysqli_query($conn,$sql);
}