<?php
session_start();
require('../database.php');

$email = $_POST["email"];
$password = $_POST["password"];
$encrypedPassword = sha1($password);

//validate
if(empty($email) || empty($password)){
    $msg = "Email dan Password Harus Diisi";
    header("Location: ../login.php?msg=". $msg);
    return;
}

$sql = "SELECT email, password FROM User WHERE email = '$email' AND password = '$encrypedPassword'";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
    //simpan sesi
    $_SESSION['email'] = $email;
   $msg =  "Login Berhasil";
   header("Location: ../feed.php");
} else{
   $msg = "Login Gagal. Pastikan Email dan Password Benar";
   header("Location: ../login.php?msg=".$msg);
}