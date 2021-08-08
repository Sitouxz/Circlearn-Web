<?php 
 if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $link = 'login.php';
    if (isset($_POST["mobi"])) {
        $link = 'login.mobi.php';
    }
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $pwd) !== false ) {
        header("location: ../../pages/$link?error=emptyinput");
        exit();
    }
    
    loginUser($conn, $email, $pwd, $link);

}
else{
    header("location: ../../pages/$link");
    exit();
}