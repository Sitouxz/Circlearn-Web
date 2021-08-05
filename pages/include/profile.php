<div class="profile-popup" id="popup">
    <div class="close-btn"><a href="javascript:void(0);" class="icon" onclick="closeProfile()">
            <i class="fa fa-close"></i>
        </a></div>
    <div class="profile-container">
        <div class="profile-nav">
            <ul>
                <li><a href="javascript:void(0);" onclick="basicInfo()">Basic Info</a></li>
                <li><a href="javascript:void(0);" onclick="history()">history</a></li>
                <li class="logout"><a href="../assets/include/logout.inc.php">Log out</a></li>
            </ul>
        </div>
        <div class="content-side">
            <div class="profile-content" id="basic">
                <div class="top">
                    <div class="user">
                        <?php
                            $id = $_SESSION["userid"];
                            $sql = "SELECT * FROM ava WHERE userId=$id;";
                            $result = mysqli_query($conn, $sql);
                            if ($rowAva = mysqli_fetch_assoc($result)) {
                                if ($rowAva['status']==1) {
                                    if(file_exists("../assets/upload/profile".$id.".jpg")){
                                        echo "<img class='avatar' src='../assets/upload/profile".$id.".jpg?".mt_rand()."'>";
                                    }
                                    else {
                                        echo "<img class='avatar' src='../assets/img/profile-picture.png'>";
                                        $sql = "UPDATE ava SET status=0 WHERE userId='$id';";
                                        mysqli_query($conn,$sql);
                                    }
                                }
                                else {
                                    echo "<img class='avatar' src='../assets/img/profile-picture.png'>";
                                }
                            }
                        ?>
                        <br>
                        <form action="../assets/include/uploadAva.php" method="POST" enctype="multipart/form-data">
                            <label for="file-upload-ava" class="custom-file-upload">
                                <i class="fa fa-cloud-upload"></i> Upload Photo
                            </label>
                            <input id="file-upload-ava" type="file" class="input-img" name="avatar"
                                onchange="form.submit()" accept=".jpg" />
                        </form>
                        <form action="include/removeAva.php">
                            <input type="submit" value="Delete Photo" class="profile-delete-btn">
                        </form>
                        <br>
                        <div class="user-name">
                            <h4>Name</h4>
                            <br>
                            <?php echo"   
                                <p>".$_SESSION["nick"]."</p>
                                "?>
                        </div>
                    </div>
                    <div class='user-info'>
                        <h4>Gender</h4>
                        <?php
                        $age = $_SESSION["birth"];
                        $bday = new DateTime($age);
                        $today = new Datetime(date('m.d.y'));
                        $diff = $today->diff($bday);
                        $ageNow = $diff->y;
                        
                    echo"<p>".$_SESSION["gender"]."</p>";
                    echo"<h4>Age</h4>";
                    echo"<p>".$ageNow."</p>";
                    echo"<h4>Email</h4>";
                    echo"<p>".$_SESSION["email"]."</p>";
                    echo"<br>";
                    echo"<button>Edit Profile</button>";
                    ?>
                    </div>
                </div>
                <div class="bottom">
                    <div class="other-info">
                        <h4>About me.</h4>
                        <input type="text" id="about" value="<?php
                            if ($_SESSION["about"]==NULL||$_SESSION["about"]==''){
                            }else{
                            echo $_SESSION["about"];
                            }
                        ?>" placeholder="Type here...">
                    </div>
                    <button id="save-info" class="about-button">Save</button>
                </div>
            </div>
            <div class="history-content" id="history">
                <div class="history-grid" id="room">
                    <?php include 'historyRoom.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function openProfile() {
    var x = document.getElementById("popup");
    x.style.display = "block";
}

function closeProfile() {
    var x = document.getElementById("popup");
    x.style.display = "none";
}

function profilePopup() {
    var x = document.getElementById("popup");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function basicInfo() {
    var x = document.getElementById("basic");
    var z = document.getElementById("history");
    x.style.display = "block";
    z.style.display = "none";
}

function history() {
    var x = document.getElementById("basic");
    var z = document.getElementById("history");
    x.style.display = "none";
    z.style.display = "block";
}
$(document).ready(function() {
    $("#save-info").click(function() {
        var about = $("#about").val();
        $.post("include/updateAbout.php", {
            about: about
        });
    })
})
</script>