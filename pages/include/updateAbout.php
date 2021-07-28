<?php
require_once '../../assets/include/dbh.inc.php';
session_start();

    $about = $_POST['about'];
    $id = $_SESSION["userid"];
    
    $sqlUpdate = "UPDATE users
    SET about = '$about'
    WHERE userId='$id';";
    mysqli_query($conn, $sqlUpdate);
    $sql = "SELECT * FROM users WHERE userId='$id'";
    $result = mysqli_query($conn, $sql);
    $room = mysqli_fetch_assoc($result);
    $_SESSION['about'] = $room['about'];
?>