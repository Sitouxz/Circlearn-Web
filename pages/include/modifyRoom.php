<?php
session_start();
require_once '../../assets/include/dbh.inc.php';
$id = $_POST['roomId'];
$name = $_POST['roomName'];
$subject = $_POST['roomSubject'];
$link = $_POST['link'];
$des = $_POST['des'];
$sql = "UPDATE room
SET roomName = '$name', roomSubject = '$subject', link = '$link', des = '$des'
WHERE roomId = $id;";
mysqli_query($conn, $sql);
header("location: ../mainPage.php?$id-$name-$subject-$link-$des");