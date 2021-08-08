<?php
session_start();
require_once '../../assets/include/dbh.inc.php';

if (isset($_POST['submit'])) {
    $roomId = $_POST['roomId'];

    $roomName = $_POST['roomName'];
    $roomSubject = $_POST['roomSubject'];
    $link = $_POST['link'];
    $des = $_POST['des'];

    $banner = $_FILES['banner'];

    $fileName = $banner['name'];
    $fileTmpName = $banner['tmp_name'];
    $fileSize = $banner['size'];
    $fileError = $banner['error'];
    $fileType = $banner['type'];
    $allowed = array('jpg');

    require_once '../../assets/include/dbh.inc.php';
    require_once '../../assets/include/roomFunctions.inc.php';

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
    modifyRoom($conn, $roomName, $roomSubject, $link, $des, $roomId);
    
    if (!empty($fileName)) {
        setBanner($conn,$fileName,$fileTmpName,$roomId);
        header("location: ../../pages/mainPage.php?changed");
        exit();
    }
    header("location: ../../pages/mainPage.php?$fileName");
    exit();
}
else{
    header("location: editRoom.php");
    exit();
}
