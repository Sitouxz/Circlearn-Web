<?php

function emptyInputSignup($fname,$lname,$email,$pwd,$repwd){
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd)|| empty($repwd)){
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
function emailExist($conn, $email){
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../sign-up.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
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

function createUser($conn, $fname, $lname, $email, $pwd){
    $sql = "INSERT INTO users (firstName,lastName,userEmail,userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../sign-up.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign-up.php?error=none");
        exit();
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
function loginUser($conn, $email, $pwd){
    $emailExists = emailExist($conn, $email);

    if($emailExists === false){
        header("location: ../log-in.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../log-in.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $emailExists["userId"];
        $_SESSION["fname"] = $emailExists["firstName"];
        $_SESSION["lname"] = $emailExists["lastName"];
        $_SESSION["email"] = $emailExists["userEmail"];
        echo $_SESSION["akhir"];
        header("location: ../index.php");
        echo $_SESSION["akhir"];
        exit();
    }
}