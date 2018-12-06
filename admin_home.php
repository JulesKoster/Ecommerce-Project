<?php
 
//user.home.php
 
/**
 * Start the session.
 */
session_start();
include 'navbar.php'; 

/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: index.php');
    exit;
}
// echo 'Congratulations! You are logged in to Da Costa Exclusive Laptop bags!';
// header('index.php');

?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="form-wrapper">
            <div class="contact-form">
            <h1>Succes</h1>
                  
            <?php echo 'Welcome'. ' '  . $_SESSION['role'] . ' ' . $_SESSION['username']. ' '. 'The Main Man';
                  
                    
            ?>
            </div>
        
            <div class="image-box-right">
            <img src="img/admindatabase.jpg" alt="register">
            </div>    
        </div>          
    </body>
</html>


