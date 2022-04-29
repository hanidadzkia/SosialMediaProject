<?php
session_start();
require('../database.php');

// STEP 1 Get All Input
$content = $_POST["content"];

// get user id
$email = $_SESSION['email'];
$sqlUser = "SELECT id FROM  User WHERE email = '$email'";
$resultUser = $conn->query($sqlUser);
$user_id = $resultUser->fetch_assoc()['id'];


// pastikan input tidak null
if(empty($content)){
    $msg = "Kamu belum menulis apapun ";
    header("Location: ../feed.php?msg=" . $msg);
    return;
}

// STEP 2 Save to Database
$sql = "INSERT INTO Status (user_id, content) VALUES ('$user_id', '$content')";

if ($conn->query($sql)) {
   $msg = "Status kamu berhasil di upload!";
} else {
    $msg = "Status kamu gagal di upload, silahkan coba lagi";
}

header("Location: ../feed.php?msg=" . $msg);
