<?php

function emptyInputSignup($username,$email,$pwd,$repwd){
    if (empty($username) || empty($email) || empty($pwd)|| empty($repwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    

    return $result;
}
function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd,$repwd){
    if ($pwd !== $repwd) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $email, $username){
    $sql = "SELECT * FROM users WHERE userEmail = ? OR userName = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../pages/login.php?error=stmtfailedd");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $email, $pwd){
    $sql = "INSERT INTO users (userName,userEmail,userPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../pages/login.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
function emptyInputLogin($email,$pwd){
    if (empty($email) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    

    return $result;
}
function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ../../pages/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../../pages/login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userId"];
        $_SESSION["nick"] = $uidExists["userName"];
        $_SESSION["email"] = $uidExists["userEmail"];
        $_SESSION["gender"] = $uidExists["gender"];

        header("location: ../../pages/mainPage.php");
        exit();
    }
}