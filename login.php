<?php
//login.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require 'lib/password.php';

/**
 * Include our MySQL connection.
 */
require 'connect.php';
include 'navbar.php';
include 'footer.php';


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['login'])){
    
    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password, role FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        die('Incorrect username / password combination!');
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        
        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            //Redirect to our protected page, which we called home.php
            header('Refresh: 1 ; url=home.php');
            exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            // die
            echo ('Incorrect username / password combination!, Please try Again');
            header ('Refresh: 1 ; url=login.php');
        }
    }
    
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="form-wrapper">
            <div class="contact-form">
            <h1>Login</h1>
            <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username"><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password"><br>
            <button type="submit" class="login" name="login" value="Login">Login</button>
            </form>
            </div>
        
            <div class="image-box-right">
            <img src="img/dell_xps15_login.jpg" alt="login">
            </div>    
        </div>          
    </body>
</html>










