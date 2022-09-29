<?php

if(isset($_POST["submit"])){
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwd_repeat"];
    $phoneNumber = $_POST["phone_number"];
    $dateOfBirth = $_POST["date_of_birth"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputSignup($firstName, $middleName, $username, $email, $pwd, $pwdRepeat, $phoneNumber, $dateOfBirth) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $firstName, $middleName, $username, $email, $pwd, $phoneNumber, $dateOfBirth);
}
else{
    header("location: ../signup.php");
}