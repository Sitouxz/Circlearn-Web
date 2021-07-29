<?php 

 if (isset($_POST["submit"])) {

    $roomName = $_POST["roomName"];
    $roomSubject = $_POST["roomSubject"];
    $link = $_POST["link"];
    $des = $_POST["des"];

    require_once 'dbh.inc.php';
    require_once 'roomFunctions.inc.php';

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
}
else{
    header("location: ../../pages/createRoom.php");
    exit();
}
?>