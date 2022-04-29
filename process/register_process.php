<?php
require('../database.php');

// STEP 1 Get All Input
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirm_password"];
$encrypedPassword = sha1($password);

// pastikan input tidak null

if(empty($email)  || empty($username) || empty($password) || empty($confirmpassword)){
    $msg = "Semua Harus Diisi";
    header("Location: ../register.php?msg=" . $msg);
    return;
}

//cek password sama
if ($password !== $confirmpassword){
    $msg = "Password Tidak Sesuai";
    header("Location: ../register.php?msg=" . $msg);
    return;
}

// STEP 2 Save to Database
$sql = "INSERT INTO User (email, username, password) VALUES ('$email', '$username', '$encrypedPassword')";

if ($conn->query($sql) === TRUE) {
   $msg = "Register Success. Please Login";
} else {
    $msg = "Register Failed. Please Try Again";
}

header("Location: ../login.php?msg=" . $msg);
?>