<?php 
    include "db_connection.php";

    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];


    $sql = "SELECT * FROM members WHERE uname='$user_name' AND upassword='$user_password'" ;
    
    $data = $conn->query($sql);
    
    // $data->execute(array($user_email,$user_password));
    // $row = $data->fetch(PDO::FETCH_BOTH);

    if($data->rowCount() > 0) {
        //$_SESSION['username'] = $user_email;
        //header('location: ../login.php?succes');
        // echo $user_email;
        $messageSuccess = "";
        $messageSuccess = "You are now logged in!";
        echo $messageSuccess;
    } else {
        $messageFail = "";
        $messageFail = "Username/Password is wrong!";
        echo $messageFail;
    }

?>



