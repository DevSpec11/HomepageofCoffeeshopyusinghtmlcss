<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrainsMart Cafe</title>
    <link rel="icon" href="image\Logocoffe.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylehome.css">  <!-- Link to external CSS file -->
</head>
<body>

    <div class="topnav">
        <div class="logo-container">
            <img src="images/Logocoffe.png" class="logo" alt="Logo">
            <span class="brand-name">GrainsMart Cafe</span>
        </div>
        <div id="Mynav" class="menu">
            <a href="index.php">Home</a>
            <a href="Menu.php">Menu</a>
            <a href="signin.php">SignIn</a>
            <a href="login.php">LogIn</a>
        </div>
        <button class="icon" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    
    <div class="section" id="learn">
    <div class="learn-content">
        <img src="images/ricecoffee.jpg"  class="learn-image">
        <h1 class="learntagline">Stay healthy <br> with grainsmart coffee <br> <a href=https://grainsmartcoffee.com/ class="button">Learn more</a></h1> 
        
    </div>
    </div>

    <div class="section" id="order">
    <div class="order-content">
        <img src="images/milkteordernow.jpg"  class="order-image">
        <h1 class="ordertagline">Experience the Perfect Brew <br> Freshly Made Just for You! <br> <a href="#your-link" class="button">Order now</a></h1> 
       
    </div>    
    </div>

    <div class="section" id="join">
        <div class="join-content">
        <img src="images/healthy.jpg"  class="join-image">
        <h1 class="jointagline">Refresh Your Day, the Tasty Way,<br> with Flavor That’s Here to Stay! <br><a href="signin.php" class="button">Join now</a> </h1> 
        
    </div>
    </div>

    <footer>
        <div class="container">
            <p>Contact Us: <a href="mailto:grainsmartcaffe@gmail.com">grainsmartcaffe@gmail.com</a> | [09175999402]</p>
            <p>Address:Blk 2 A Lot 4 Vista Rosa Subd Brgy Soro Soro Biñan Laguna</p>
            <p>&copy; 2025 GrainsMartCaffee. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("Mynav");
            menu.classList.toggle("show");
        }
    </script>

</body>
</html>