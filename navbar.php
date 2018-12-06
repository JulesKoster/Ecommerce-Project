<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Da Costa Laptopbag page</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
  <body>
    <!-- Nav Start-->
    <nav>
        <div class="navbar">
          <div class="navbar-left">
            <a href="index.php">Home<i class="fas fa-home"></i></a>

            <?php 
            
            
            if (isset($_SESSION['role']) and ($_SESSION['role'] == 'admin')) {
            echo '<div class="welcome-user">' . '<a href="admin_home.php">Logged in as : ' . $_SESSION['username'] . '</a></div>';             
            } 
            else if (isset($_SESSION['username'])) {
            echo '<div class="welcome-user">' . '<a href="home.php">Logged in as : ' . $_SESSION['username'] . '</a></div>' ;
          } 
            ?> 
            </div>               
           
          <div class="navbar-right">  
            <a href="cart.php">Shopping Cart<i class="fas fa-cart-plus"></i></a>
            <a href="register.php">Register<i class="fas fa-user-plus"></i></a>
            <a href="logout.php">Logout<i class="fas fa-sign-out-alt"></i></a>
            <a href="login.php">Login<i class="fa fa-fw fa-user"></i></a>
            
          </div>
        </div>
    </nav>
    
    <!-- Nav End-->
    </body>
    </html>