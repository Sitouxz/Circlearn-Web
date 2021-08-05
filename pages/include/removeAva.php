<?php
session_start();
    require_once '../../assets/include/dbh.inc.php';
$id = $_SESSION['userid'];
$sql = "UPDATE ava
SET status = 0
WHERE userId = $id;";
mysqli_query($conn, $sql);
header("location: ../mainPage.php");