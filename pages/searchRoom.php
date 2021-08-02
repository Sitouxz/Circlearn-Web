<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Circlearn" />
    <meta name="description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <!-- HTML Meta Tags -->
    <meta name="description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Circlearn" />
    <meta property="og:description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <meta property="og:image" content="./assets/img/Hero-logo.svg" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="sitouxz.github.io" />
    <meta property="twitter:url" content="https://sitouxz.github.io/Circlearn-Web/" />
    <meta name="twitter:title" content="Circlearn" />
    <meta name="twitter:description"
        content="Join The Circle And Learn Together according to the subjects you are interested in With Productive Community of Students." />
    <meta name="twitter:image" content="./assets/img/Hero-logo.svg" />
    <title>Rooms | Circlearn</title>
    <link rel="shortcut icon" href="../assets/img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/headerFooter.css" />
    <link rel="stylesheet" href="../assets/css/mainPage.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/profile.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'include/header.php'?>

    <section>
        <div class="card-container">
            <h1>ROOMS</h1>
            <label>Sort</label>
            <form method="get">
            <input type="radio" name="sort" value="newest" id="newest" onclick="form.submit()">
                <label for="newest" >Newest</label>
            <input type="radio" name="sort" value="oldest" id="oldest" onclick="form.submit()">
                <label for="oldest">Oldest</label>
            </form>
            <div class="grid" id="room">
            <?php
        $order = "ORDER BY timeCreated DESC";
        $sort = $_SESSION['sort'];
        if ($_SESSION['sort'] == "oldest") {
            $order = "ORDER BY timeCreated ASC";
        }
    $sql = "SELECT room.roomId, users.userName, room.roomName, room.roomSubject, room.link, room.des, banner.status, _create.timeCreated 
    FROM (((`_create` 
        RIGHT JOIN room ON _create.roomId = room.roomId) 
        LEFT JOIN users ON _create.userId = users.userId)
        LEFT JOIN banner ON room.roomId = banner.roomId) 
        $order;";
    $result = mysqli_query($conn,$sql);
    $room = mysqli_fetch_assoc($result);
if(isset($_POST['search'])){
    $emptySearch = 0;
    $search = $_POST['search'];
    if (!empty($search)) {
        do{
            if (strpos($room['roomName'], $search)!==false){
                include 'include/room.php';
                $emptySearch++;
            }
            //nanti mo kase pisah mana hasil search by roomId dan mana yang hasil search by roomName
            //nanti mo tambah hasil search by Subject
            else if ($room['roomId'] === $search){
                include 'include/room.php';
                $emptySearch++;
            }
        }while ($room = mysqli_fetch_assoc($result));
        if ($emptySearch==0) {
            echo "<h2>Room not Found!</h2>";
        }
    }
}
else {
    echo "<h2>Empty!</h2>";
}
?>
</div>
</div>
</section>
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
</script>
</body>

</html>