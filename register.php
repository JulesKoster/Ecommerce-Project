<?php 
    include "db_connection.php";


//retrieve our data from POST
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];


 try {
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

// header("Location: register.php");  
?>








