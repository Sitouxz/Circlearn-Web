<?php

$avatar = $_FILES['avatar'];

$fileName = $avatar['name'];
$fileTmpName = $avatar['tmp_name'];
$fileSize = $avatar['size'];
$fileError = $avatar['error'];
$fileType = $avatar['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png');

if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
        if ($fileSize<2580104) {
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = '../upload/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            header("location: ../../pages/mainPage.php");
        } else {
            echo "Your File is too big!";
            header("location: ../../pages/mainPage.php?error=tooBig");
        }
    }else {
        echo "Oops! There's an error when uploading your photo!";
        header("location: ../../pages/mainPage.php?error=true");
    }
} else {
    echo "File does not supported!";
    header("location: ../../pages/mainPage.php?error=unsupported");
}
