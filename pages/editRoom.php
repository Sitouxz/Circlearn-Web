<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <title>Create Room | Circlearn</title>
    <link rel="shortcut icon" href="../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/headerFooter.css" />
    <link rel="stylesheet" href="../assets/css/createRoom.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script>
    $(document).ready(function() {

    })
    </script>
</head>

<body>
    <?php include 'include/header.php'?>
    <div class="content-header">
        <ul>
            <li class="active">Manage Room</li>
        </ul>
    </div>

    <div class="croom-container">
        <form class="cbanner" action="../assets/include/uploadBanner.php" method="post" enctype="multipart/form-data">
            <div class="banner"><img id="roomBanner" 
            <?php 
            $id = $_POST["roomId"];
            if(file_exists("../assets/upload/banner".$id.".jpg")){
                echo "src='../assets/upload/banner".$id.".jpg?".mt_rand()."'";
            }
            ?>></div>
            <label for="file-upload-banner" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Upload Photo
            </label>
        </form>

        <form class="room-info-container" action="include/modifyRoom.php" method="post"
            enctype="multipart/form-data">
            <input type="file" id="file-upload-banner" class="input-img" name="banner" onchange="previewImage()"
                accept=".jpg" />
            <div class="room-info">
                <label>
                    <span>Room name</span>
                    <input type="text" name="roomName" 
                    <?php 
                    if(isset($_POST['roomName'])){
                    echo "value='".$_POST['roomName']."'";
                    }
                    ?>/>
                </label>
                <label>
                    <span>Room Subject</span>
                    <select name="roomSubject" id="subject">
                        <option value="Science"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "Science"){echo 'selected="selected"';} ?>
                        >Science</option>
                        <option value="History"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "History"){echo 'selected="selected"';} ?>
                        >History</option>
                        <option value="Math"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "Math"){echo 'selected="selected"';} ?>
                        >Math</option>
                        <option value="Art"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "Art"){echo 'selected="selected"';} ?>
                        >Art</option>
                        <option value="Music"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "Music"){echo 'selected="selected"';} ?>
                        >Music</option>
                        <option value="Geography"
                        <?php if(isset($_POST['roomSubject']) && $_POST['roomSubject'] === "Geography"){echo 'selected="selected"';} ?>
                        >Geography</option>
                    </select>
                </label>
                <label>
                    <span>Link</span>
                    <input type="text" name="link" <?php 
                    if(isset($_POST['link'])){
                    echo "value='".$_POST['link']."'";
                    }
                    ?>/>
                </label>
                <label>
                    <span>Room Description (Optional)</span>
                    <textarea name="des" id="" cols="50" rows="10" ><?php 
                    echo $_POST['des'];
                    ?></textarea>
                </label>
            </div>
            <input type="hidden" value="<?php $id = $_POST["roomId"]; echo $id; ?>" name="roomId"/>
            <button type="submit" name="submit">Save</button>
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

    function previewImage() {
        var previewBox = document.getElementById("roomBanner");
        previewBox.src = URL.createObjectURL(event.target.files[0]);
    }
    </script>
</body>

</html>