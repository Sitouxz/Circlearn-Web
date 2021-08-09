<?php

$created = $room['timeCreated'];
            $date1 = new DateTime($created);
            $date2 = new DateTime($now);
        
             // The diff-methods returns a new DateInterval-object...
            $diff = $date2->diff($date1);
        
            // Call the format method on the DateInterval-object
            $timeCreated = $diff->format(' %dd %hh %im');
echo "
<article>
<div class=\"img-container\">";
if ($room['status'] == 1) {
  echo "<img src='../assets/upload/banner".$room['roomId'].".jpg?".mt_rand()."' class='banner2'/>";
}else {
  echo "<img src='../assets/img/card-banner.png' class='banner2'/>";
}


echo "
<div class='id-container'>
<p class='room-id'>".$room['roomId']. " | " .$room['userName']."</p>
<p class='room-id' id='time'>".$timeCreated."</p>
</div>
<div class='bg-shadow'>
    <h1>".$room['roomName']."</h1>
    <p>".$room['roomSubject']."</p>
</div>
</div>
<div class=\"text\">
  <div class= 'text-desc'>
  <h3>description</h3>
  <p class='description'>";
  if ($room["des"]==NULL||$room["des"]=='') {
     echo "-";
    }else{
      echo $room["des"];
    }
    echo "
    </p>
  </div>
  <div class='text-button'>
    <form method='POST' action='include/joinRoom.php'>
      <a onclick=\"form.submit()\"><button id='join'>Join!</button></a>
      <input type='hidden' value=\"".$room['link']."\" name='link'>
      <input type='hidden' value=\"".$room['roomId']."\" name='roomId'>
    </form>
  </div>
</div>
</article>
";
?>