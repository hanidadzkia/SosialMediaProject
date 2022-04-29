<?php
session_start();
require('database.php');

$sqlFetchStatus = "SELECT * FROM status LEFT JOIN user ON status.user_id = user_id ORDER BY status.created_at DESC"; 
$resultStatus = $conn->query($sqlFetchStatus);

//var_dump($resultStatus->fetch_assoc());
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sosial Media · WTalk</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="styles/pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
        <span class="fs-4">WTalk</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      
        <a class="py-2 text-dark text-decoration-none" href="profile.php">Hanidadzkia</a>
      </nav>
    </header>

    <main class="container">
<div class = "row">
    <div class="col-lg-12">
        <h4>What's on your mind?</h4>

        <form action="process/feed_process.php" method="POST" class ="form">
          <div class="mb-3">
            <textarea name="content" class="form-control"></textarea>
    </div>

    <div class="mb-3">
            <input type="submit"  class="btn btn-primary float-end" value="Post" name="">
    </div>
        </form>
   

    </div>
    </div>

    <div class="row">
      <div class="col-lg-12">

     
      

      <?php
      if($resultStatus->num_rows >0){

        //looping data status
        while ($row = $resultStatus->fetch_assoc()){
          echo "<p>
          <b> $row[username]</b> <br>
        $row[content] <br>
        <a href=''>Like</a> - <a href=''>Comment</a>
        </p>
        <hr>";
        }
      } else{
        echo "<center> tidak ada status untuk ditampilkan</center>";
      }
      ?>
      
    </div>
    </main>
</html>