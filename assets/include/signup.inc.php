<?php 

 if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repwd = $_POST["repwd"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    
    if (isset($_POST["mobi"])) {
        $link = 'login.mobi.php';
        if (isset($_POST["register"])) {
            $link = 'register.php';
        }
    }

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username,$email,$pwd,$repwd) !== false ) {
        header("location: ../../pages/$link?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../../pages/$link?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd,$repwd) !== false ) {
        header("location: ../../pages/$link?error=pwdnotmatch");
        exit();
    }
    if (uidExists($conn,$email,$username, $link) !== false ) {
        header("location: ../../pages/$link?error=emailtaken");
        exit();
    }

    createUser($conn, $username, $email, $pwd, $dob, $gender, $link);
    
    setAva($conn, $username, $link);

    loginUser($conn, $email, $pwd, $link);
}
else{
    header("location: ../../pages/login.php");
    exit();
}
?>