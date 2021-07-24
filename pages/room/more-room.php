<?php
require_once '../../assets/include/dbh.inc.php';

    $count = $_POST['count'];
    $sql = "SELECT * FROM room LIMIT $count;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck>0) {
        while ($room = mysqli_fetch_assoc($result)) {
            include 'room.php';
        }
    }
    else{
        echo "<h2>Empty!</h2>";
    }
?>