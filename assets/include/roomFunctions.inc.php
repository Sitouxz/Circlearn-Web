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

    $fileName = $banner['name'];
    $fileTmpName = $banner['tmp_name'];
    $fileSize = $banner['size'];
    $fileError = $banner['error'];
    $fileType = $banner['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize<2580104) {
                $fileNameNew = "room".$id.".".$fileActualExt;
                $fileDestination = '../upload/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE banner SET status=1 WHERE userId='$id';";
                mysqli_query($conn,$sql);
                
                header("location: ../../pages/createRoom.php?".$fileTmpName."");
            } else {
                echo "Your File is too big!";
                header("location: ../../pages/createRoom.php?error=tooBig");
            }
        }else {
            echo "Oops! There's an error when uploading your photo!";
            header("location: ../../pages/createRoom.php?error=true");
        }
    } else {
        echo "File does not supported!";
        header("location: ../../pages/createRoom.php?error=unsupported");
    }
}