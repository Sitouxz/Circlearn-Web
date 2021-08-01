<?php
    $sql = "SELECT * FROM room LIMIT 10;";
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