<?php
session_start();

$authenticated=true;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" href="image\lego.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">
        <image src="image\lego.png" width="30" height="30" class="d-inline-block align-top" alt="">Brand name</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark" href="index.php">Home</a>
        </li>
        <?php 
        if ($authenticated){
        ?>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="\profle.php">profile</a></li>
           
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="\logout.php">logout</a></li>
</ul>
        </li>

    </ul>
        <?php 
        }else{
        ?>
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a href="/register.php" class="btn btn-outline-primary me-2">Register</a>
        </li>
        <li class="nav-item">
            <a href="/login.php" class="btn btn-primary">Login</a>
        </li>
    </ul>
    <?php } ?>

    </div>
  </div>
</nav>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>