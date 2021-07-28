<?php 
 if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $pwd) !== false ) {
        header("location: ../../pages/login.php?error=emptyinput");
        exit();
    }
    
    loginUser($conn, $email, $pwd);

}
else{
    header("location: ../../pages/login.php");
    exit();
}