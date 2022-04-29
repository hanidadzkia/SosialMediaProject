<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register Account</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
     
  <form action= "process/register_process.php" method = "POST">

    <img class="mb-4" src="assets/brand/logo.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Welcome to WTalk!</h1>

    <?php
     if(isset($_GET['msg'])) {
       echo '<div class="alert alert-info">'. $_GET ['msg'].'</div>';
       
     }
     ?>


    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="inputusername" placeholder="Enter your name">
      <label for="floatingInput">Full Name</label>
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="inputemail" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" name="confirm_password" class="form-control" id="inputconfirm_password" placeholder="Password">
      <label for="floatingPassword">Password Confirmation</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p class="mt-5 mb-3 text-muted">&copy; WTalk.2022</p>
  </form>
</main>


    
  </body>
</html>
