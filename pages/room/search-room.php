<?php
require_once '../../assets/include/dbh.inc.php';
    
if(isset($_POST['search'])){
    $sql = "SELECT * FROM room;";
    $result = mysqli_query($conn,$sql);
    $room = mysqli_fetch_assoc($result);
    $search = $_POST['search'];
    do{
        if (strpos($room['roomName'], $search)!==false){
            echo "
            <article>
            <div class=\"img-container\">
              <p>".$room['roomId']. " | " .$room['creatorName']."</p>
            </div>
            <div class=\"text\">
              <h3>Name</h3>
              <p>".$room['roomName']."</p>
              <h3>Subject</h3>
              <p>".$room['roomSubject']."</p>
              <h3>description</h3>
              <p>
                ".$room['des']."
              </p>
              <a href=\"".$room['link']."\"><button>Join!</button></a>
            </div>
            </article>
            ";
        }
        //nanti mo kase pisah mana hasil search by roomId dan mana yang hasil search by roomName
        //nanti mo tambah hasil search by Subject
        if ($room['roomId'] === $search){
            echo "
            <article>
            <div class=\"img-container\">
              <p>".$room['roomId']. " | " .$room['creatorName']."</p>
            </div>
            <div class=\"text\">
              <h3>Name</h3>
              <p>".$room['roomName']."</p>
              <h3>Subject</h3>
              <p>".$room['roomSubject']."</p>
              <h3>description</h3>
              <p>
                ".$room['des']."
              </p>
              <a href=\"".$room['link']."\"><button>Join!</button></a>
            </div>
            </article>
            ";
        }
    }while ($room = mysqli_fetch_assoc($result));
}
?>