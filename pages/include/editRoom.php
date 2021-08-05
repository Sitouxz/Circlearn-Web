<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <title>Manage Room | Circlearn</title>
    <link rel="shortcut icon" href="../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/headerFooter.css" />
    <link rel="stylesheet" href="../assets/css/manageRoom.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/createRoom.css" />
</head>

<body>
    <?php include 'include/header.php'?>
    <div class="content-header manage-room">
        <ul>
            <li><a href="./createRoom.php">Create Room</a></li>
            <li class="active"><a href="#">Manage Room</a></li>
        </ul>
    </div>

    <div class="croom-container">
        <form class="cbanner" action="../assets/include/uploadBanner.php" method="post" enctype="multipart/form-data">
            <div class="banner"><img id="roomBanner" src="<?php 
            if ($_POST['ava']) {
                
            }
            ?>"<></div>
            <label for="file-upload-banner" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Upload Photo
            </label>
        </form>
        
        <form class="room-info-container" action="../assets/include/createRoom.inc.php" method="post" enctype="multipart/form-data">
                <input type="file" id="file-upload-banner" class="input-img" name="banner" onchange="previewImage()" accept=".jpg"/>
            <div class="room-info">
                <label>
                    <span>Room name</span>
                    <input type="text" name="roomName" />
                </label>
                <label>
                    <span>Room Subject</span>
                    <select name="roomSubject" id="subject">
                        <option value="Science">Science</option>
                        <option value="History">History</option>
                        <option value="Math">Math</option>
                        <option value="Art">Art</option>
                        <option value="Music">Music</option>
                        <option value="Geography">Geography</option>
                    </select>
                </label>
                <label>
                    <span>Link</span>
                    <input type="text" name="link" />
                </label>
                <label>
                    <span>Room Description (Optional)</span>
                    <textarea name="des" id="" cols="50" rows="10"></textarea>
                </label>
            </div>
            <button type="submit" name="submit">Create</button>
        </form>
    </div>

    <?php include 'include/footer.php'?>

    <script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    function previewImage(){
        var previewBox = document.getElementById("roomBanner");
        previewBox.src = URL.createObjectURL(event.target.files[0]);
    }
    </script>
</body>

</html>