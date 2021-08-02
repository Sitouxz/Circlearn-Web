<?php
    //$sort = ['roomSort'];
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated 
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        $order LIMIT 10;";
    $result = mysqli_query($conn,$sql);
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
<script>
$(document).ready(function() {
    $('#show_more').show();
})
</script>