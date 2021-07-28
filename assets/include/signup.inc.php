<?php 

 if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username,$email,$pwd,$repwd) !== false ) {
        header("location: ../../pages/login.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false ) {
        header("location: ../../pages/login.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../../pages/login.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd,$repwd) !== false ) {
        header("location: ../../pages/login.php?error=pwdnotmatch");
        exit();
    }
    if (uidExists($conn,$email,$username) !== false ) {
        header("location: ../../pages/login.php?error=emailtaken");
        exit();
    }

    createUser($conn, $username, $email, $pwd);
    
    setAva($conn, $username);

    loginUser($conn, $email, $pwd);
}
else{
    header("location: ../../pages/login.php");
    exit();
}
?>