<?php

if(isset($_COOKIE['isLogin'])){
  header("location: ./pages/dashboard.php");
}

if(isset($_COOKIE['token'])){
  setcookie("isLogin", "true");
  header("location: ./pages/dashboard.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>Hoopz</title>
    <meta charset="utf-8">
    <meta name="title" content="Hoopz">
    <meta name="description" content="At Hoopz, The top roblox basketball players in the world have gathered to compete for the best.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Roblox, Hoopz, Hoops, Phenom, Basketball, Cyberprism, XBOX, pc, controller, xbox360, xbon one, 1 player, 2 players, 3 players, 4 players, 5 players, multiplayer, playhoopz, playhoopz.com">
    <meta name="author" content="Jaru#4328">
    <meta name="generator" content="Jaru#4328">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://playhoopz.com/">
    <meta property="og:title" content="Hoopz">
    <meta property="og:description" content="At Hoopz, The top roblox basketball players in the world have gathered to compete for the best.">
    <meta property="og:image" content="https://playhoopz.com/assets/hoops.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://playhoopz.com/">
    <meta property="twitter:title" content="Hoopz">
    <meta property="twitter:description" content="At Hoopz, The top roblox basketball players in the world have gathered to compete for the best.">
    <meta property="twitter:image" content="https://playhoopz.com/assets/hoops.png">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
      url("https://media.discordapp.net/attachments/818830177898725409/965821661477752832/HoopzThumbnail_1.png");
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-repeat: no-repeat;
      background-size: 100vw 100vh;
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
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <script src = "./js/login.js"></script>
  
</body>
</html>

