<?php 
    session_start();
 if (isset($_POST["submit"])) {

    $roomName = $_POST["roomName"];
    $roomSubject = $_POST["roomSubject"];
    $link = $_POST["link"];
    $des = $_POST["des"];

    $banner = $_FILES['banner'];
    $userId = $_SESSION['userid'];

    $fileName = $banner['name'];
    $fileTmpName = $banner['tmp_name'];
    $fileSize = $banner['size'];
    $fileError = $banner['error'];
    $fileType = $banner['type'];
    $allowed = array('jpg');

    require_once 'dbh.inc.php';
    require_once 'roomFunctions.inc.php';
    if (!empty($fileName)) {
        if ($fileSize>2580104) {
            echo "Your File is too big!";
            header("location: ../../pages/createRoom.php?error=tooBig");
            exit();
        }
        if ($fileError > 0) {
            echo "Oops! There's an error when uploading your photo!";
            header("location: ../../pages/createRoom.php?error=fatal!");
            exit();
        }
        if (in_array($fileActualExt, $allowed)) {
            echo "File does not supported!";
            header("location: ../../pages/createRoom.php?error=unsupported");
            exit();
        }
    }
    
    if (emptyRoomInput($roomName, $roomSubject, $link, $des) !== false ) {
        header("location: ../../pages/createRoom.php?error=emptyinput");
        exit();
    }
    if (roomExists($conn,$roomName) !== false ) {
        header("location: ../../pages/createRoom.php?error=roomExist");
        exit();
   }
    if (invalidLink($link) !== false ) {
        header("location: ../../pages/createRoom.php?error=invalidLink");
        exit();
    }

    

    createRoom($conn, $roomName, $roomSubject, $link, $des);
    $room = roomExists($conn,$roomName);
    $roomId = $room['roomId'];
    
    if (!empty($fileName)) {
        setBanner($conn,$fileName,$fileTmpName,$roomId);
    }
    
    header("location: ../../pages/mainPage.php?Created=".$roomName."");
    exit();
    
}
else{
    header("location: ../../pages/createRoom.php");
    exit();
}
?>