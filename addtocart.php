<?php

session_start();

if (empty($_SESSION['addtocart'])); {
    $_SESSION['addtocart'] = array();
}

array_push($_SESSION['addtocart'], $_GET['id']); 
header ('location: cart.php');
?>

