<?php

// Sign Up Functions
function emptyInputSignup($firstName, $middleName, $username, $email, $pwd, $pwdRepeat, $phoneNumber, $dateOfBirth){
    $result;
    if(empty($firstName) || empty($middleName) || empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat) || empty($phoneNumber) || empty($dateOfBirth)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $middleName, $username, $email, $pwd, $phoneNumber, $dateOfBirth){
    $sql = "INSERT INTO users (firstName, middleName, usersUid, usersEmail, usersPwd, phoneNumber, dateOfBirth) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $middleName, $username, $email, $pwd, $phoneNumber, $dateOfBirth);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}
///////////////////////
// Login Function
function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        // error = wronglogin
        header("location: ../login.php?error=not-exists");
        exit();
    }

    $pwd_db = $uidExists["usersPwd"];
    // $pwd = $_POST["pwd"];

    if($pwd_db == $pwd){
        session_start();
        // the first one is variable but the second on is the name of the column from database.
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        header("location: ../administrator.php");
        exit();
    }else{
        // error = wronglogin
        header("location: ../login.php?error=incorrect-password");
        exit();
    }
}

/////////////////////////
// submit form functions

// Post Code Exist
function codeExists($conn, $random_number){
    $sql = "SELECT * FROM post_info WHERE post_code = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtFaild");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $random_number);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

// this is using for invalid name from the post from "submit_form.php"
// this is just used for letters
function invalidNumber($phone_num){

    // 07[3-9][0-9]{8}
    // What this mean is,   
    // 07 - it tries to find literally 07  
    // [3-9] - then followed by 3 to 9, only one time
    // [0-9] - then followed by 0 to 9  
    // {8} - text previous to this should has at least 8 characters

    $result;

    if(preg_match("/07[5,7][0-9]{8}/", $phone_num)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}