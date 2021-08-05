<?php
session_start();
    require_once '../../assets/include/dbh.inc.php';
$id = $_POST['roomId'];
$sql = "UPDATE room
SET del = 'true'
WHERE roomId = $id;";
mysqli_query($conn, $sql);
header("location: ../mainPage.php");