<?php 

 if (isset($_POST["submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname,$lname,$email,$pwd,$repwd) !== false ) {
        header("location: ../sign-up.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../sign-up.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd,$repwd) !== false ) {
        header("location: ../sign-up.php?error=pwdnotmatch");
        exit();
    }
    if (emailExist($conn,$email) !== false ) {
        header("location: ../sign-up.php?error=emailtaken");
        exit();
    }

    createUser($conn, $fname, $lname, $email, $pwd, $repwd);
}
else{
    header("location: ../sign-up.php");
    exit();
}
?>