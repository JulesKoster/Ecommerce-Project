<?php 
    include "db_connection.php";

//retrieve our data from POST
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];


//switched of try not to clutter dbbase  try {
    $sql = "INSERT INTO members (uname, upassword, email)
    VALUES ('$user_name', '$user_password','$user_email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header("Location: index.php");  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Form 2</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="register.css">
    <!-- <script src="script.js"></script> -->
  </head>
  <body>
    <!-- Content -->
 
<body>
  
<div class="formwrap">
  <form name="register" action="register.php" method="post">
  
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><span><b>Username</b></span></label>
    <input type="text" placeholder="Enter Username" name="user_name" required maxlength="20"> <br> <!-- maxlength 20 because of security-->
    
    <label for="email"><span><b>Email</b></span></label>
    <input type="text" placeholder="Enter Email" name="user_email" required><br>
    
    <label for="psw"><span><b>Password</b></span></label>
    <input type="password" placeholder="Enter Password" name="user_password" required><br>     
    
    
    <!-- Optional, probably use later
     <label>
     <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label> -->
    
    <!-- <p>By creating an account you agree to our <a href="#" style="color:darkorange">Terms & Privacy</a>.</p> optional -->

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </form>
  
</div>


</body>
</html>







