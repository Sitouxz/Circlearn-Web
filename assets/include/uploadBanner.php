<?php
session_start();
include_once 'dbh.inc.php';

$id = $_SESSION['userid'];

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
            echo true;
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
?>