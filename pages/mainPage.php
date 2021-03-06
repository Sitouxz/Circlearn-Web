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
    <script>
    $(document).ready(function() {
        var count = 10;
        $("#show_more").click(function() {
            count = count + 10;
            $(".grid").load("include/moreRoom.php", {
                count: count
            })
        })
    })
    </script>
</head>

<body onload="<?php 
if (isset($_GET['sort'])) {
    if ($_GET['sort']=="newest") {
        echo "checkNew()";
    }
    else if ($_GET['sort']=="oldest") {
        echo "checkOld()";
    }
}
?>">
    <?php include 'include/header.php'?>

    <section>
        <div class="card-container">
            <h1>ROOMS</h1>
            <div class="sort">
                <div class="sort-content">
                    <div class="text">
                        <p>Sort room by :</p>
                    </div>
                    <div class="form">
                        <form method="get">
                            <input type="radio" name="sort" value="newest" id="newest" onclick="form.submit()"
                                onclick="check()" >
                            <label for="newest">Newest</label>
                            <input type="radio" name="sort" value="oldest" id="oldest" onclick="form.submit()"
                                onclick="check()">
                            <label for="oldest">Oldest</label>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                $order = "ORDER BY timeCreated DESC";
                if (isset($_GET['sort'])) {
                    if ($_GET['sort'] == "oldest") {
                        $order = "ORDER BY timeCreated ASC";
                    }
                }
                
            ?>
            <div class="grid" id="room">
                <?php
                    include 'include/defaultRoom.php';
                ?>
            </div>
            
            <button id="show_more">Show more!</button>
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

    function checkNew() {
        document.getElementById("newest").checked = true;
    }

    function checkOld() {
        document.getElementById("oldest").checked = true;
    }
    </script>
</body>

</html>