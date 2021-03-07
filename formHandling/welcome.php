<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_GET['logout'])){
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to Signin form
    
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
    <title>PHP FORM HANDLING - Welcome</title>
</head>
<body>
    <div class="container">

        <div class="jumbotron text-center">
            <h1 class="text-info">welcome</h1>
        </div>

        <h3 class="text-center">Hi, <b><?php echo $_SESSION["username"]; ?></b>. Welcome to Fastbeetech website.</h3>
        <p class="text-center">
            <span>Vist my main site on <a href="https://www.fastbeetech.com">to Learn More About the Author</a></span>
            <a href="welcome.php?logout" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>
    
</body>
</html>
