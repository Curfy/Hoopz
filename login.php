<?php

if(isset($_COOKIE['isLogin'])){
  header("location: ./pages/home.php");
}

if(isset($_COOKIE['token'])){
  setcookie("isLogin", "true");
  header("location: ./pages/home.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Hoopz Signin</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Signin CSS -->
    <link href="./css/signin.css" rel="stylesheet">

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

      .bgdesign{
      background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
      url(./assets/hoopz.png);
      background-repeat: no-repeat;
      background-size: cover;
      }
    </style>

    
    
  </head>
  <body class="text-center bgdesign">

<main class="form-signin h-60 p-5 bg-light border rounded-3" style = "max-width: 430px;">
  <form method = "POST" class="needs-validation" novalidate>
    <img class="mb-4" src="./pages/images/hoopzlogo.png" alt="" width="128" height="128">
    <h1 class="h3 mb-3 fw-normal">Hoopz Dashboard</h1>

    
    <!-- Error Message -->
    <div id = "errorMessage">
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="username" value = "" placeholder="Username" required>
      <label for="username">Username</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="password" value = "" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" id = "rememberCheckbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id = "loginBtn" type="submit" disabled>Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>


    
  </form>
</main>
  <script src="./js/jquery.js"></script>
  <script src = "./js/login.js"></script>
  
</body>
</html>

