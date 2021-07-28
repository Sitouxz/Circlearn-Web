
    <div class="profile-popup" id="popup">
        <div class="close-btn"><a href="javascript:void(0);" class="icon" onclick="closeProfile()">
                <i class="fa fa-close"></i>
            </a></div>
        <div class="profile-container">
            <div class="profile-nav">
                <ul>
                    <li><a href="javascript:void(0);" onclick="basicInfo()">Basic Info</a></li>
                    <li><a href="javascript:void(0);" onclick="bookmarks()">Bookmarks</a></li>
                    <li class="logout"><a href="#">Log out</a></li>
                </ul>
            </div>
            <div class="content-side">


                <div class="profile-content" id="basic">
                    <div class="top">
                        <div class="user">
                            <div class="profile-picture"></div>
                            <br>
                            <form action="../assets/include/upload-img.php" method="POST" enctype="multipart/form-data">
                            <input type="file" class="input-img" name="avatar" onchange="form.submit()"/>
                            <br>
                            <div class="user-name">
                                <h4>Name</h4>
                                <br>
<?php   echo"                   <p>".$_SESSION["nick"]."</p>"?>
                            </div>
                        </div>
                        <div class='user-info'>
                        <h4>Gender</h4>
                    <?php
        echo"            <p>".$_SESSION["gender"]."</p>";
        echo"            <h4>Address</h4>";
        echo"            <p>Wakanda, USA</p>";
        echo"            <h4>Email</h4>";
        echo"            <p>".$_SESSION["email"]."</p>";
        echo"            <h4>Phone Number</h4>";
        echo"            <p>08123456789</p>";
        echo"           <br>";
        echo"           <button>Edit Profile</button>";
                    ?>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="other-info">
                            <h4>Other Information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit similique consequuntur
                                impedit
                                consectetur quas voluptatem doloribus expedita pariatur, dicta soluta quaerat
                                reprehenderit
                                autem
                                provident mollitia aspernatur tempore! Vel, inventore a?</p>
                        </div>
                    </div>
                </div>

                <div class="bookmarks-content" id="bookmarks">
                    <div class="bookmarks-card-container">
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
                        <div class="bookmarks-card">
                            <div class="banner">
                                <p>1 | Jokowi</p>
                            </div>
                            <button class="delete">Delete</button>
                        </div>
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
            var z = document.getElementById("bookmarks");
            x.style.display = "block";
            z.style.display = "none";
        }

        function bookmarks() {
            var x = document.getElementById("basic");
            var z = document.getElementById("bookmarks");
            x.style.display = "none";
            z.style.display = "block";
        }
    </script>