<?php

include 'navbar.php';
include 'footer.php';

SESSION_START();
session_destroy();

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
            <h1>Logged Out</h1>
                  
            <?php echo 'You are logged out to Da Costa Exclusive Laptop bags!';
            header('Refresh: 2 ; url=index.php');
                  
                    
            ?>
            </div>
        
            <div class="image-box-right">
            <img src="img/logout.jpg" alt="register">
            </div>    
        </div>          
    </body>
</html>
