<?php
session_start();
ob_start();
require_once '../../assets/include/dbh.inc.php';
$url = $_POST['link'];
$room = $_POST['roomId'];
$user = $_SESSION['userid'];
$sql = "INSERT INTO _join (userId, roomId) VALUES ($user,$room);";
mysqli_query($conn,$sql);

while (ob_get_status()) 
{
    ob_end_clean();
}
header( "Location: $url" );
exit();