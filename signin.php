<?php
// Database connection
$servername = "localhost"; // change as needed
$username = "root";        // your MySQL username
$password = "";            // your MySQL password
$dbname = "try";           // your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $username = $_POST['username'];
    $password = ($_POST['password']); // hashing password
    $email=$_POST['email'];
    $role = "customer"; // default role

    // Check if the username already exists
    $check_username_sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($check_username_sql);

    if ($result->num_rows > 0) {
        // Username exists, display error
        $error_message = "Error: The username is already taken. Please choose another one.";
    } else {
        // Username doesn't exist, proceed with inserting
        $sql = "INSERT INTO users (first_name, last_name, phone_number, username, password,email, role)
                VALUES ('$first_name', '$last_name', '$phone_number', '$username', '$password','$email', '$role')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "Account created successfully.";
            header("Location: login.php"); 
            exit(); 
        } else {
            $error_message = "Error: " . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">  <!-- Link to external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up Form</title>
    <style>
        /* CSS for error and success messages */
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
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

    

    <form method="POST" action="">
        <h2>Create Account</h2>
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="phone_number">Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="checkbox" onclick="myFunction()"> Show Password <br><br>

        <input type="submit" value="Create Account">
    </form>
        <?php if ($error_message != ""): ?>
            <div class="message error">
                <?php echo $error_message; ?>
            </div>
        <?php elseif ($success_message != ""): ?>
            <div class="message success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

    <footer>
    <div class="container">
        <p>Contact Us: <a href="mailto:grainsmartcaffe@gmail.com">grainsmartcaffe@gmail.com</a> | [09175999402]</p>
        <p>Address:Blk 2 A Lot 4 Vista Rosa Subd Brgy Soro Soro Biñan Laguna</p>
        <p>&copy; 2025 GrainsMartCaffee. All Rights Reserved.</p>
    </div>
    </footer>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function toggleMenu() {
            var menu = document.getElementById("Mynav");
            menu.classList.toggle("show");
        }
    </script>

</body>
</html>
