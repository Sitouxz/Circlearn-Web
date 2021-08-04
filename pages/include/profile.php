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
                                onchange="form.submit()" accept="image/*"/>
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
                    echo"<p>".$_SESSION["gender"]."</p>";
                    echo"<h4>Age</h4>";
                    echo"<p>18</p>";
                    echo"<h4>Email</h4>";
                    echo"<p>".$_SESSION["email"]."</p>";
                    // echo"<h4>Phone Number</h4>";
                    // echo"<p>08123456789</p>";
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
                        ?>" placeholder="....">
                    </div>
                    <button id="save-info" class="about-button">Save</button>
                </div>
            </div>
            <style>
                
                #history{
                display: none;
                overflow-y: scroll;
                height: 461px;
                margin-bottom: 16px;
                }

                #history .grid {
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 5px;
                margin-left: 6px;
                }

                #history article img {
                width: 200px;
                grid-area: overlap;
                border-radius: 20px 20px 0px 0px;
                }

                #history article {
                width: 200px;
                margin: 5px;
                }
                .history-grid {
                margin: 15px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                }

                .history-grid>article {
                background-color: rgb(248, 248, 248);
                border: none;
                box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
                border-radius: 20px;
                width: 275px;
                transition: 0.3s;
                }

                .history-grid>article:hover {
                transform: translateY(5px);
                box-shadow: 2px 2px 26px 0px rgba(0, 0, 0, 0.3);
                transition: 0.3s;
                z-index: -999;
                }

                .history-grid>article img {
                object-fit: cover;
                width: 275px;
                height: 120px;
                border-radius: 20px;
                }

                .history-grid>article .room-id {
                z-index: 999;
                }

                .img-container p {
                font-size: 12px;
                padding: 15px;
                margin: 0;
                color: rgb(255, 255, 255);
                }

                .img-container h1 {
                    color: white;
                    text-align: center;
                    margin-block-start: 2.2em;
                    margin-block-end: 0;
                }
                .img-container .bg-shadow p {
                    text-align: center;
                    padding: 5px;
                }
                .history-card{
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 1fr;
                grid-template-areas: "overlap";
                }
                .history-card .room-id{
                grid-area: overlap;
                }
                .history-card .bg-shadow{
                grid-area: overlap;
                }
                .history-text button{
                border-radius: 0px 0px 20px 20px;
                }
                .history-text {
                padding: 0;
                }

                .history-text button {
                margin: 0;
                background-color: var(--primary-color);
                border-radius: 0px 0px 20px 20px;
                border: none;
                color: var(--light-color);
                padding: 10px;
                width: 100%;
                font-weight: 600;
                font-family: "Poppins", sans-serif;
                text-transform: uppercase;
                cursor: pointer;
                }

                .history-text button:hover {
                transition: 0.3s;
                background-color: orange;
                color: white;
                }
            </style>
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